### 数组或对象属性类型转换

#### 配置

> 需要转换的属性与类型
>
> 支持类型有
>
> - "boolean" or "bool"
> - "integer" or "int"
> - "float" or "double"
> - "string"
> - "array"
> - "object"
> - "null"

#### 示例

```php
// 举例
$configs = [
  'username' => 'string',
  'age' => 'int',
];
$datas = [
  'username' => 'Lily', // string
  'age' => '12', // string 
];
var_dump($datas);
/*
array(2) {
  ["username"]=>
  string(4) "Lily"
  ["age"]=>
  string(2) "12"
}
*/
$app = new DataType($configs);
$results = $app->convert($datas);
var_dump($results);
/*
array(2) {
  ["username"]=>
  string(4) "Lily"
  ["age"]=>
  int(12)
}
*/
```

