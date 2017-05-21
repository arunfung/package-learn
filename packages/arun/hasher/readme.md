
### 开发 Laravel 扩展 测试

### 用法

```
composer require arun/hasher
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "arun/hasher": "~0.1"
```

下载完毕之后,直接配置 `app/config.php` 的 `providers`:

```php
//Illuminate\Hashing\HashServiceProvider::class,
\Arun\Hasher\MD5HasherProvider::class,
```