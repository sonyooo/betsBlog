+--------+-----------+----------------------------------+------------------------------+------------------------------------------------------------------------+----------------------------------------------------------------+
|[32m Domain [39m|[32m Method    [39m|[32m URI                              [39m|[32m Name                         [39m|[32m Action                                                                 [39m|[32m Middleware                                                     [39m|
+--------+-----------+----------------------------------+------------------------------+------------------------------------------------------------------------+----------------------------------------------------------------+
[39;49m|        | GET|HEAD  | /                                | home                         | App\Http\Controllers\HomeController@index                              | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\Authenticate                               |
[39;49m|        | GET|HEAD  | _debugbar/assets/javascript      | debugbar.assets.js           | Barryvdh\Debugbar\Controllers\AssetController@js                       | Barryvdh\Debugbar\Middleware\DebugbarEnabled[39;49m[39;49m                   |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mClosure                                                        |
[39;49m|        | GET|HEAD  | _debugbar/assets/stylesheets     | debugbar.assets.css          | Barryvdh\Debugbar\Controllers\AssetController@css                      | Barryvdh\Debugbar\Middleware\DebugbarEnabled[39;49m[39;49m                   |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mClosure                                                        |
[39;49m|        | DELETE    | _debugbar/cache/{key}/{tags?}    | debugbar.cache.delete        | Barryvdh\Debugbar\Controllers\CacheController@delete                   | Barryvdh\Debugbar\Middleware\DebugbarEnabled[39;49m[39;49m                   |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mClosure                                                        |
[39;49m|        | GET|HEAD  | _debugbar/clockwork/{id}         | debugbar.clockwork           | Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork          | Barryvdh\Debugbar\Middleware\DebugbarEnabled[39;49m[39;49m                   |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mClosure                                                        |
[39;49m|        | GET|HEAD  | _debugbar/open                   | debugbar.openhandler         | Barryvdh\Debugbar\Controllers\OpenHandlerController@handle             | Barryvdh\Debugbar\Middleware\DebugbarEnabled[39;49m[39;49m                   |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mClosure                                                        |
[39;49m|        | GET|HEAD  | admin/blog/posts                 | filter                       | App\Http\Controllers\Blog\Admin\PostController@filter                  | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | POST      | admin/categories                 | blog.admin.categories.store  | App\Http\Controllers\Blog\Admin\CategoryController@store               | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/categories                 | blog.admin.categories.index  | App\Http\Controllers\Blog\Admin\CategoryController@index               | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/categories/create          | blog.admin.categories.create | App\Http\Controllers\Blog\Admin\CategoryController@create              | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | PUT|PATCH | admin/categories/{category}      | blog.admin.categories.update | App\Http\Controllers\Blog\Admin\CategoryController@update              | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/categories/{category}/edit | blog.admin.categories.edit   | App\Http\Controllers\Blog\Admin\CategoryController@edit                | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | POST      | admin/posts                      | blog.admin.posts.store       | App\Http\Controllers\Blog\Admin\PostController@store                   | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/posts                      | blog.admin.posts.index       | App\Http\Controllers\Blog\Admin\PostController@index                   | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/posts/create               | blog.admin.posts.create      | App\Http\Controllers\Blog\Admin\PostController@create                  | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | DELETE    | admin/posts/{post}               | blog.admin.posts.destroy     | App\Http\Controllers\Blog\Admin\PostController@destroy                 | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | PUT|PATCH | admin/posts/{post}               | blog.admin.posts.update      | App\Http\Controllers\Blog\Admin\PostController@update                  | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | admin/posts/{post}/edit          | blog.admin.posts.edit        | App\Http\Controllers\Blog\Admin\PostController@edit                    | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mIlluminate\Auth\Middleware\Authorize:is-admin,\App\Models\User |
[39;49m|        | GET|HEAD  | api/user                         | generated::2bUjideKqx7mJXYm  | Closure                                                                | api[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\Authenticate:sanctum                       |
[39;49m|        | POST      | login                            | generated::ChvRPr9U1sQCd6Sk  | App\Http\Controllers\Auth\LoginController@login                        | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\RedirectIfAuthenticated                    |
[39;49m|        | GET|HEAD  | login                            | login                        | App\Http\Controllers\Auth\LoginController@showLoginForm                | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\RedirectIfAuthenticated                    |
|        | POST      | logout                           | logout                       | App\Http\Controllers\Auth\LoginController@logout                       | web                                                            |
[39;49m|        | POST      | password/confirm                 | generated::feHQDnmboIQJSI1p  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\Authenticate                               |
[39;49m|        | GET|HEAD  | password/confirm                 | password.confirm             | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\Authenticate                               |
|        | POST      | password/email                   | password.email               | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                                            |
|        | POST      | password/reset                   | password.update              | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                                            |
|        | GET|HEAD  | password/reset                   | password.request             | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                                            |
|        | GET|HEAD  | password/reset/{token}           | password.reset               | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                                            |
[39;49m|        | POST      | register                         | generated::rOC4FUHvz2QpEpLs  | App\Http\Controllers\Auth\RegisterController@register                  | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\RedirectIfAuthenticated                    |
[39;49m|        | GET|HEAD  | register                         | register                     | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web[39;49m[39;49m                                                            |[39;49m
[39;49m|        |           |                                  |                              |                                                                        | [39;49mApp\Http\Middleware\RedirectIfAuthenticated                    |
|        | GET|HEAD  | sanctum/csrf-cookie              | generated::IYJ3ED3Aix8UsIzV  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show             | web                                                            |
+--------+-----------+----------------------------------+------------------------------+------------------------------------------------------------------------+----------------------------------------------------------------+