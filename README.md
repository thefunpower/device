# device

获取设备信息

安装

~~~
composer require thefunpower/device
~~~


使用

~~~
get_device_info()
~~~

输出
~~~ 
Array
(
    [client] => Array
        (
            [type] => browser
            [name] => Chrome
            [short_name] => CH
            [version] => 120.0.0.0
            [engine] => Blink
            [engine_version] => 120.0.0.0
            [family] => Chrome
        )

    [os] => Array
        (
            [name] => Windows
            [short_name] => WIN
            [version] => 10
            [platform] => x64
            [family] => Windows
        )

    [device] => desktop
    [brand] => 
    [model] => 
    [key] => Windows10 x64 Chrome
    [uni] => Windows10 x64 Chrome desktop 127.0.0.1
)
~~~

## License

[Apache License 2.0](LICENSE)

本项目包含的第三方源码和二进制文件之版权信息另行标注。
