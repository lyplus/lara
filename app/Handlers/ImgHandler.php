<?php

namespace App\Handlers;

class ImgHandler
{
    // 只允许以下后缀名的图片文件上传
    // protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function add($file, $folder)
    {
      // dd($file);
      //正则匹配出图片的格式
      if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $file, $result)) {
          $type = $result[2];     //图片后缀

          $folder = $folder. '/'.date('Ym', time()) . '/';    //构造存储目录 images/201712/

          if (!file_exists($folder)) {
              //检查是否有该文件夹，如果没有就创建，并给予最高权限
              mkdir($folder, 0700,true);
          }


          $filename = uniqid() . ".{$type}";    //文件名

          $path = $folder . $filename;         //构造存储路径

          // var_dump($new_file);
          //写入操作
          if (file_put_contents($path, base64_decode(str_replace($result[1], '', $file)))) {
              return config('app.url').'/'.$path;  //返回文件名及路径
          } else {
              return false;
          }
      }else {
        // 如果上传的不是图片将终止操作
        return false;
      }

        // return [
        //     'path' => config('app.url') . "/$folder_name/$filename"
        // ];
    }
}
