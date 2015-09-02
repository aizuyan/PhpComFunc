```php
/**
 * 数据编码转换，从GBK到UTF-8
 * @param $data mixed 要转换的数据
 * @return mixed 转换之后的数据
 */
public function G2U($data)
{
    if(is_array($data) ||  is_object($data)){
        foreach ($data as $key=>&$value){
            if(is_array($value) || is_object($value)){
                $value = $this->G2U($value);
            }
            elseif(is_string($value)){
                $value = iconv('GBK', 'UTF-8//IGNORE', $value);
            }else{
                continue;
            }
        }
    }elseif(is_string($data)){
        $data = iconv('GBK', 'UTF-8//IGNORE', $data);
    }   

    return $data;  
}

/**
 * 数据编码转化，总UTF-8到GBK
 */
public function U2G($data)
{
    if(is_array($data) || is_object($data)) {
        foreach ($data as &$value) {
            if(is_array($value) || is_object($value)) {
                $value = $this->U2G($value);
            } elseif(is_string($value)) {
                $value = iconv('UTF-8', 'GBK//IGNORE', $value);
            }
        }
    } elseif(is_string($data)) {
        $data = iconv('UTF-8', 'GBK//IGNORE', $data);
    }

    return $data;
}
```
