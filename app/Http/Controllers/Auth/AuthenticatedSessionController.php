<?php

namespace App\Http\Controllers\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthenticatedSessionController extends Controller
{
   public function create(): View
   {
      return view('auth.login');
   }

   public function store(LoginRequest $request): RedirectResponse|JsonResponse
   {
      $request->authenticate();

      $request->session()->regenerate();

      if($request->wantsJson()){ 
         return response()->json($request->user()); 
      }

      return redirect()->intended(RouteServiceProvider::HOME);
   }
   
   public function destroy(Request $request): RedirectResponse|Response
   {
      Auth::guard('web')->logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      if($request->wantsJson()){
         return response()->noContent();
      }

      return redirect('/');
   }
}