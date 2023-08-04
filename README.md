# php-env

php获取env环境变量

默认路径在根目录下.env

$env = new PhpEnv();
$env->get('APP_DEBUG', false);

可自定义文件路径
$env = new PhpEnv();
$env->load($_SERVER['DOCUMENT_ROOT'] . '/wwwroot/.env')
