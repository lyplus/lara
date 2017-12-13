<?php

use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{
    /**
     * 1. str_shuffle($str)                                    //打乱字符串
     * 2. substr(string,start,length)                          //返回字符串的一部分
     * 3. mb_substr( $str, $start, $length, $encoding )        //截取符串的一部分
     * 4. array_rand(array,number)                             //array必需。规定数组。number可选。规定返回多少随机键名。
     * 5. array_slice(array,start,length,preserve)
     *    //array必需。规定数组。number可选。规定返回多少随机键名。
     *    //start必需。数值。规定取出元素的开始位置。 0 = 第一个元素。
     *    //length可选。数值。规定被返回数组的长度。
     *    //preserve可选。规定函数是保留键名还是重置键名。可能的值：
     *
     * 6.preg_split ($pattern , $subject [, int $limit = -1 [, int $flags = 0 ]] )
     *    //通过一个正则表达式分隔字符串，返回一个数组，失败时返回FALSE
     *    //string $pattern用于搜索的模式，正则表达式
     *    //string $subject输入字符串
     *    //int $limit如果指定，将限制分隔得到的子串最多只有limit个，返回的最后一个 子串将包含所有剩余部分。limit值为-1， 0或null时都代表"不限制"
     *    //flags PREG_SPLIT_NO_EMPTY如果这个标记被设置， preg_split() 将进返回分隔后的非空部分
     *    //flags PREG_SPLIT_DELIM_CAPTURE如果这个标记设置了，用于分隔的模式中的括号表达式将被捕获并返回
     *    //flags PREG_SPLIT_OFFSET_CAPTURE如果这个标记被设置, 对于每一个出现的匹配返回时将会附加字符串偏移量
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //   [
        //     'title'=>'天王盖地虎',
        //     'description'=>'提莫一米五',
        //     'body'=>'提莫一米五。。。',
        //   ],
        //   [
        //     'title'=>'宝塔镇河妖',
        //     'description'=>'提莫长不高',
        //     'body'=>'提莫长不高。。。',
        //   ],
        // ];
        // DB::table('topics')->insert($data);



        //执行30次
        for($i=0; $i<3; $i++){
          $str='李白乘舟将欲行忽闻岸上踏歌声桃花潭水深千尺不及汪伦送我情';
          // $str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
          // $randStr = str_shuffle($str);
          // $randSub= substr($randStr,0,6);
          // $strLen=mb_strlen( $str, 'utf-8'); //获取字符串长度
          // $start=rand(3,10);
          // $len=$strLen-$start;
          // $strSub=preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start.'}'.'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s','$1',$str);

          $strArr=preg_split('//u', $str, 0, PREG_SPLIT_NO_EMPTY);  //将汉字字符串拆分成数组，第一个参数是正则匹配，必须加上u，因为是utf8编码
          // shuffle($strArr);                             //利用shuffle函数，打乱汉字数组。不能使用str_shuffle函数，因为那个是打乱字符
          $count=count($strArr);
          $start=rand(1,$count-5);
          $strArrSub = array_slice($strArr, $start,5);     //从数组中截取 5个元素，得到的就是一个汉字数组
          $strSub = implode('', $strArrSub);               // implode：将数组拼凑成字符串

          $data=[
            [
              'title'=>$strSub,
              'description'=>'['.$start.'] '.$strSub,
              'body'=>'['.$start.'] '.$strSub.$strSub.'。。。',
              'user_id'=>rand(1,10),  //取1~10随机整数
              'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
              'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]
          ];
          DB::table('topics')->insert($data);
        }
    }
}
