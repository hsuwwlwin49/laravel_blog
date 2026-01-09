<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $param = null): Response
    {
        
        if(!auth()->check()){
            return redirect('/login')->with('error', 'Please login first');
        }
        if (!$param) {
            abort(500, 'Route parameter not specified in middleware');
        }
        $model = $request->route($param);
        if (!$model || $model->user_id !== auth()->id()) {
            abort(403, 'You do not own this coontent');
        }
        return $next($request);
    }
}
