/*
 * 制作人：王鑫
 * 日期：2.16、8/27
* 内容：判断登录逻辑
 */

//主函数
	function check(){
	var name=user_form.user_name;
	var pwd=user_form.user_password;
	var type=user_form.user_type;
	if(name.value.length==0){
 		alert("账户名不能为空！");
 		name.focus();
 		return false;
 	}else if(pwd.value.length==0){
 		alert("密码不能为空！");
 		pwd.focus();
 		return false;
 	}

 		//检测账号格式是否正确
   var reg_seu=/^seu+\w/;
    var reg_stu=/^\d{9}$/;

    if(type.value=="student"){
           if(!reg_stu.test(name.value)){
            alert("一卡通格式错误！");
            name.value="";
            name.focus();
            return false;
           }
    }else if(type.value=="admin"){
       if(!reg_seu.test(name.value)){
               alert("学团联账户格式错误！");
               name.value="";
               name.focus();
             return false;
           }
       }else{
        if(!reg_seu.test(name.value)){
               alert("社团账户格式错误！");
               name.value="";
               name.focus();
                return false;
           }               
           }     
    //检测密码格式是否正确
        var reg_pwd=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
        if(!reg_pwd.test(pwd.value)){
           alert("密码格式错误(必须且只含有数字和字母,8-16位)!");
           pwd.value="";
           pwd.focus();
           return false;
        }
        // alert("登录成功！")
        document.user_form.submit();
	}