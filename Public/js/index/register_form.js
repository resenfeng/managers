/*
 * 制作人：王鑫
 * 日期：2.16、8/27
 * 内容：判断注册逻辑
 */


//检测属性是否为空函数
  function isEmpty(name,str){
    if(name.value.length==0){
      alert(str);
      name.focus();
      return true;
    }
  }

//检测属性是否符合规范函数
  function test(reg,name,str){
    if(!reg.test(name.value)){
      alert(str);
      name.value="";
      name.focus();
      return true;
    }
  }
//随机生成验证码函数
  function code(n)
  {
    var s="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    var ret="";
    for(var i=0;i<n;i++)
    {
      ret+=s.charAt(Math.floor(Math.random()*62));
    }
    return ret;
  }
//显示验证码
 function showcode()
  {
    user_form.user_vacode.value=code(4);
  }
  window.onload=showcode;
 //主函数
  function check(){
  var name=user_form.user_name;
  var email=user_form.user_email;
  var sex=user_form.user_sex;
  var phone=user_form.user_phone;
  var pwd=user_form.user_password;
  var rpwd=user_form.user_repassword;
  var vacode=user_form.vacode;
  var checkbox1=user_form.checkbox1;
  //检测是否为空
  if(isEmpty(name,"账户名不能为空！")){
    return false;
  }else if(isEmpty(email,"邮箱不能为空！")){
    return false;
  }else if(isEmpty(phone,"手机号不能为空！")){
    return false;
  }else if(isEmpty(name,"账户名不能为空！")){
    return false;
  }else if(isEmpty(name,"密码不能为空！")){
    return false;
  }else if(isEmpty(name,"请确认密码！")){
    return false;
  }else if(checkbox1.checked!=true){
      alert("请确认并接受注册协议!");
      return false;
   }

  /*if(name.value.length==0){
    alert("账户名不能为空！");
    name.focus();
    return false;
  }else if(email.value.length==0){
    alert("邮箱不能为空！");
    email.focus();
    return false;
  }else if(phone.value.length==0){
    alert("手机号不能为空！");
    phone.focus();
    return false;
  }else if(pwd.value.length==0){
    alert("密码不能为空！");
    pwd.focus();
    return false;
  }else if(rpwd.value.length==0){
    alert("请确认密码！");
    pwd.focus();
    return false;
  }else if(checkbox1.checked!=true)
   {
      alert("请确认并接受注册协议!");
      return false;
   }*/

    //检测注册格式是否正确
    var reg_stu=/^\d{9}$/;
    if(test(reg_stu,name,"一卡通格式错误！")){
      return false;
    }
    //检测邮箱格式是否正确
    var reg_email=/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
     if(test(reg_email,email,"邮箱格式错误！")){
      return false;
    }
    //检测手机格式是否正确
    var reg_phone=/^1[3|4|5|7|8]\d{9}$/;
    if(test(reg_phone,phone,"手机格式错误(11位)!")){
      return false;
    }
    //检测密码格式是否正确
    var reg_pwd=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
     if(test(reg_pwd,pwd,"密码格式错误(必须且只含有数字和字母,8-16位)!")){
      rpwd.value="";
      return false;
    }
    //检测两次密码是否一致
    if(pwd.value!=rpwd.value){
      alert("两次密码输入不一致！");
      rpwd.value="";
      rpwd.focus();
      return false;
    }

  //  //检测验证码
   if(isEmpty(vacode,"请填写验证码！")){
    return false;
   }
  //  if (R('Verify/sssss')){
  //       alert("验证码填写错误ssfsfsf！");
  //        vacode.value="";
  //         vacode.focus();
  //         return false;
  //  }
   if(vacode.value!=user_form.user_vacode.value){
    alert("验证码填写错误！");
     vacode.value="";
      vacode.focus();
      return false;
   }
  }