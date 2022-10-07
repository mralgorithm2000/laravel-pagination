# laravel-pagination
paginaion for lists

paginate your content and navigate to each page by using this simple package

# installation
to install this package run:

`composer require mralgorithm/laravel-pagination`

then run this command to publish required files:
```
php artisan vendor:publish --tag=mralgorithm-laravel-pagination
```
for the last step, add this css to your template file
```
<link href="{{ url('laravel-pagination/laravelPaginationStyle.css') }}" rel="stylesheet">
```
# usage
## in the controllers:
to get offset you can use this function
```
\Mralgorithm\LaravelPagination\Helper::offset($pid,$limit)
```
### example

```
public function show($pid = 1)
    {
        $limit = 15;
        $Content = Posts::limit($limit)->offset(\Mralgorithm\LaravelPagination\Helper::offset($pid,$limit))->get();
        return view('test',[
            'Content' => $Content,
            'count' => Posts::count(),
            'pid' => $pid
        ]);
    }
```

## in views
to paginate your list add this code to your views
```
$laravelPagination->pagination($count,$limit,$pid,url('/%s'))
```
### example
1.
```
{{ $laravelPagination->pagination(@$count,15,$pid,url('/%s')) }}
```


2.
```
<body>
    <table>
        <thead>
            ...
        </thead>
        <tbody>
            @foreach ($Content as $C)
                ...
            @endforeach
        </tbody>
    </table>
    {{ $laravelPagination->pagination(@$count,15,$pid,url('/%s')) }}
</body>
```

# Configuration
to config this package edit `/config/laravelPagination.php`

## parameters
### mode:
Dark/Light Mode

set `light` to get lightmode
set `dark` to get darkmode

### next
use this parameters to set next button text/icon

1. for font-awesome
```
<i class="fa fa-arrow-right"></i>
```

2. for google font icon:
```
<i class="material-icons-round">arrow_right</i>
```

3. for simple text:
`next`

 4. for multilang support
 ```
 __('yourTranslationFile.next')
```
replace parameters according to your language files


### previous
use this parameters to set previous button text/icon

 1. for font-awesome
 ```
 <i class="fa fa-arrow-left"></i>
 ```
 
 2. for google font icon:
 ```
 <i class="material-icons-round">arrow_left</i>
 ```
 
 3. for simple text:
 `next`
 
 4. for multilang support
 ``` 
 __('yourTranslationFile.previous')
 ```
 replace parameters according to your language files
