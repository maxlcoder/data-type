<?php

namespace Maxlcoder\DataType;

class DataType 
{

    private $configs;

    public function __construct(array $configs)
    {
        $this->configs = $configs;
    }

    public function convert($datas)
    {
        if (is_object($datas)) {
            // 转换为数组
            $datas = (array) $datas;
        }
        if (is_array($datas)) {
            foreach ($datas as $key => $val) {
                if (array_key_exists($key, $this->configs)) {
                    try {
                        $res = settype($datas[$key], $this->configs[$key]);
                        if (!$res) {
                            continue;
                        }
                    } catch (\Exception $e) {
                        continue;
                    }
                }
            }
        }
        return $datas;
    }
}