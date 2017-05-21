[![Build Status](https://travis-ci.org/arunfung/laravel-package-develop.svg?branch=master)](https://travis-ci.org/arunfung/laravel-package-develop)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/badges/build.png?b=master)](https://scrutinizer-ci.com/g/arunfung/laravel-package-develop/build-status/master)
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