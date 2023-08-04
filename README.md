# php-env

## php获取.env文件环境变量

### 安装命令

composer require ysc911/php-env:dev-main

**默认路径在根目录下.env**

### 获取值

$env = new PhpEnv();
$env->get('APP_DEBUG', false);

### 自定义文件路径

$env = new PhpEnv();
$env->load($_SERVER['DOCUMENT_ROOT'] . '/wwwroot/.env')

### 设置值

$env->set('APP_DEBUG', false);
