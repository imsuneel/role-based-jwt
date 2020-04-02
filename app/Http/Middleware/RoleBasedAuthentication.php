<?php

namespace App\Http\Middleware;

use Closure;

class RoleBasedAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()) {   
            $role_id = $request->user()->role_id;
            $permissions = \App\Model\Permission::select('name')->where('role_id',$role_id)->get();
            $permission = [];
            if($permissions){
                foreach($permissions as $per){
                    $permission[] = $per->name;
                }
            }
            $request_uri = $request->getPathInfo();
            if(!in_array($request_uri, $permission)){
                return response()->json([
                    'error' => 'Permission Denied'
                ], 403);
            }else{
                return $next($request);
            }
        }
        return $next($request);
        
    }
}
