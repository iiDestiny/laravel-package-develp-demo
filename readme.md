# This is test Demo

```angular2html
composer require destiny/hasher
```

添加进 `app/config.php` 的 providers :

```angular2html
\Destiny\Hasher\MD5HasherProvider::class,
```

使用方法

```angular2html
$md5 = app('md5hash');
$md5->make($value, ['salt' => 'string']);
$md5->check($value, $hashValue, ['salt' => 'string']);
```