<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use App\Scope\StatusScope;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    //
    public function index()
    {
//        $users = DB::select("select * from laravel_users");
//        $users = User::all();
//        $users = DB::table('users')->get();
//        $users = DB::table('users')->first();
//        $users = DB::table('users')->value('email');
//        $users = DB::table('users')->pluck('email');
//        $users = DB::table('users')->orderBy('id')->chunk(3,function ($users){
//            foreach ($users as $user){
//                echo $user->username.'</br>';
//            }
//            echo '--------------</br>';
//        });
//        return [$users];
//        $count = DB::table('users')->count();
//        return $count;
//        $price = DB::table('users')->sum('price');
//        return $price;
//        return DB::table('users')->where('id',19)->doesntExist();
//        return DB::table('users')->select('username as name','email')->get();
//        $base = DB::table("users")->select('username as name','email');
//        $user = $base->addSelect('gender')->get();
//        $users = DB::table('users')->select(DB::raw('COUNT(*) AS count,gender'))->groupBy('gender')->get();
//        $users = DB::table('users')->selectRaw("COUNT(*) AS count,gender")->groupBy('gender')
////            ->havingRaw('count>5')
//            ->having('count', '<', 5)
//            ->get();
//        $users = DB::table('users')->where("price",'>',95)->orWhere('gender','女')->toSql();
//        $users = DB::table("users")->where('price', '>', 95)
//            ->orWhere(function ($query) {
//                $query->where('gender', '女')
//                    ->where('username', 'like', '%小%');
//            })->toSql();
//        $users = DB::table('users')->whereBetween('price',[60,90])->toSql();
//        $users = DB::table('users')->whereIn('price',[20,30,50])->toSql();
//        $users = DB::table("users")->whereNull('uid')->toSql();
//        $users = DB::table('users')->whereDate('created_at','2018-12-11')->get();
//        $users = DB::table('users')->whereYear('created_at','2019')->get();
        //查询两个字段相等
//        $users = DB::table('users')->whereColumn('created_at','<','updated_at')->get();
        //排序
//        $users = DB::table('users')->orderBy('id','asc')->get();
        //时间倒序
//        $users = DB::table('users')->latest('created_at')->get();
//        $users = DB::table('users')->inRandomOrder()->get();
        //跳过前两条，从第三条开始,取3条
//        $users = DB::table('users')->skip(2)->take(3)->get();
//        $users = DB::table('users')->offset(2)->limit(3)->get();
        //使用when
//        $users = DB::table('users')->when(true,function ($query){
//            $query->where('id',19);
//        },function ($query){
//            $query->where('username','辉夜');
//        })->get();
        //5.7以上支持json
//        $users = DB::table('users')->where('list->id',19)->get();
        //whereExists子查询
//        $users = DB::table('users')->whereExists(function ($query){
//            $query->selectRaw(1)
//                ->from('books')
//                ->whereRaw('laravel_books.user_id == laravel_users.id');
//        })->toSql();
//        $users = DB::table('users')->where('id',function ($query){
//            $query->selectRaw('user_id')
//                ->from('books')
//                ->whereColumn('books.user_id','users.id');
//        })->toSql();
        //join查询
//        $users = DB::table('users')
//            ->join('books','users.id','=','books.user_id')
//            ->join('profiles', 'users.id' , '=', 'profiles.user_id')
//            ->select('users.id','users.username','users.email','books.title','profiles.hobby')
//            ->toSql();
        //左连接和右连接
//        $users = DB::table('users')
//            ->leftJoin('books','users.id','=','books.user_id')
//            ->rightJoin('profiles','users.id','=' ,'profiles.user_id')
//            ->distinct()
//            ->toSql();
        //交叉连接
//        $users = DB::table('users')
//            ->crossJoin('books')
//            ->select('username','email')
////            ->distinct()
//            ->toSql();
        //闭包
//        $users = DB::table('users')
//            ->leftJoin('books',function ($join){
//                $join->on('users.id','=','books.user_id');
//            })->toSql();
        //子连接
//        $query = DB::table('books')->selectRaw('user_id,title');
//        $users = DB::table('users')
//            ->joinSub($query,'b',function ($join){
//                $join->on('users.id','=','b.user_id');
//            })->get();
        //合并两个查询
//        $query  = DB::table('users');
//        $users = DB::table('users')->unionAll($query)->toSql();
        //插入数据
//        $userid = DB::table('users')->insertGetId([
//
//            'username' => '李白',
//            'password' => '123456',
//            'email' => 'libai@163.com',
//            'details' => '123'
//        ]);
        //更新
//        $userid = DB::table('users')->where('id',102)->update([
//            'username' => '路飞',
//            'gender' => '女'
//        ]);
//        $userid = DB::table('users')->updateOrInsert(
//            ['id' => 105],
//            [
//                'username' => '路飞',
//                'password' => '123456',
//                'gender' => '女',
//                'details' => '123'
//            ]
//        );
//        return $userid;
        //模型
//        $users = User::get();
//        $users = User::where([
//            ['gender','=','男'],
//            ['price','>',95]
//        ])->toSql();
//        return $users;
//模型增删改
//        $users = new User();
//        $users->username = '辉夜';
//        $users->password = '123';
//        $users->email = 'huiye@163.com';
//        $users->details = '123';
//        $users->save();
//        $users = User::find(102);
//        $users->delete();
//        $users = User::get();
//        $users = User::withTrashed()->find(102);
//        $users = User::onlyTrashed()->find(102);
//        return $users->restore();
//        $user = User::find(102);
//        return $user->forceDelete();
//        $users = User::genderMale()
//            ->where('price','>',70)
//            ->get();

//        $users = User::withoutGlobalScope(StatusScope::class)->get();
//        $users = User::get();
//        $users = User::withoutGlobalScope('status')->get();
//        return $users;
        //集合
//        $collection = collect(['张三','李四','王五',null]);
//        dd($collection);
//        return $collection->all();
//        return $collection->map(function ($val,$key){
//            return $key.'['.$val.']';
//            });
        //reject移除非true的值
//        return $collection->reject(function ($val,$key){
//            return $val === null;
//        })->map(function ($val,$key){
//            return $key.'['.$val.']';
//        });
        //filter过滤为true的值
//        return $collection->filter(function ($val,$key){
//            return $val === null;
//        })->map(function ($val,$key){
//            return $key.'['.$val.']';
//        });
        //search根据值查找返回的key，找不到返回false
//        return $collection->search("王五");
        //集合分割
//        return $collection->chunk(2);
        //集合遍历
//        $collection->each(function ($val,$key){
//            echo $key."::::::::::::::".$val."<br>";
//        });
        //自定义方法
//        $collection->push('mr.do');
//        Collection::macro('toUpper',function (){
////            dd($this) ;
//            return $this->map(function ($val,$key){
//                return strtoupper($val);
//            });
//        });
//        return $collection->toUpper();
        //all方法
//        $collection = collect([1,2,3,4,5,6,7,8,9,1]);
//        dd($collection);
//        return $collection->avg();
//        return $collection->sum();
//        return $collection->min();
//        return $collection->count();
//        return $collection->countBy();
        //countby方法
//        $collection = collect(['xiaoxin@qq.com','xiaoming@qq.com','lufei@163.com']);
//        return $collection->countBy(function ($val){
//            return substr(strchr($val,'@'),1);
//        });
        //diff返回两个集合中不相同的
//        $collection = collect([1,2,3,4,5]);
//        $collection2 = collect([1,2]);
//        return $collection->diff($collection2);
        //duplicates返回重复的值
//        $collection = collect([1,2,3,4,5,5,6,7,6]);
//        return $collection->duplicates();
        //返回判断成立的第一个值
//        $collection = collect([1,2,3,4,5,6]);
//        return $collection->first(function ($val){
//            return $val>2;
//        });
        //将多维数组转为一维数组
//        $collection = collect([1,2,3,[1,2,5,7],12,43]);
//        return $collection->flatten();
        //get通过键名找值
//        $collection = collect(['name'=>'张三','sex'=>'男' ]);
//        return $collection->get('name');
        //has判断集合是否存在此键
//       return $collection->has('name');
        //pop移除集合最后一个值
//        $collection->pop();
//        $collection->put('age',21);
//        $collection->push('成都');
        //返回指定位置后续的集合
//        $collection = collect([1,3,2,5,6,7,4]);
//
////        return $collection->slice(3);;
//        return $collection->splice(3);
        //返回排序后的集合
//        return $collection->sort(function ($a,$b){
//            if ($a == $b){
//                return 0;
//            }
//            return ($a<$b) ? 1 : -1;
//        })->values();
//        return $collection->sortBy('key')->values();
//        $collection = collect([
//            ['name'=>'Mr.Lee', 'gender'=>'男'],
//            ['name'=>'Miss.Zhang', 'gender'=>'女']
//        ]);
//        return $collection->where('name','Mr.Lee');
        //数据集合
        $users = User::get();
//        return $users->map(function ($user){
//             $user->email = strtoupper($user->email);
//            return $user;
//        });
//        return $users->reject(function ($user){
//            return $user->gender == '男';
//        })->map(function ($user){
//            return $user;
//        });
//        return $users->contains(User::find(101));
//        return $users->contains(100);
        //返回不在集合中的模型
//        return $users->diff(User::whereIn('id',[19,20,21])->get());
        //返回不在给定主键的集合
//        return $users->except([19,20,21]);
        //find
//        return $users->find(19);
        //count
//        return $users->count();
        //返回所有模型的主键
//        return $users->modelKeys();
        //返回指定主键的模型
//        return $users->only([19,21,20]);
        //返回集合中的唯一模型
//        return $users->unique();
        //一对一
//        return User::find(19)->profile;
//        return Profile::find(1)->user;
        //一对多
//        return User::find(19)->book->where('id',1);
//        return Book::find(1)->user;
        //多对多
//        return User::find(19)->role()->where('role_id',1)->get();
//        $roles = User::find(19)->role;
//        return $roles->where('id',1);
//        return Role::find(1)->user;
//        $你好 = collect([1,2,3,4]);
//        return $你好;

    }

    public function find()
    {
        $user = DB::table('users')->find(19);
//        return [$user];
        return response()->json($user);
    }
}
