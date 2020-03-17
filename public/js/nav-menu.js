$(document).ready(function () {
    let user = new User;
    $(".register, .login, .register-menu, .login-menu").hover(function () {
        if(!$(".register, .login").hasClass("hovered") && $(".register-menu, .login-menu").hasClass("disable"))
        {
            $(this).children().toggleClass("disable")
            $(this).toggleClass("hovered")
        }
    },function () {
        let focusElem = $(this).find("input:focus").length == 1 && $(this).find("input:focus")[0].className
        for(let i = 0; i < $(this).find("input").length; i++){
            if($(this).find("input")[i].className == focusElem)
            {
                break
            }else if(i+1 == $(this).find("input").length){
                $(this).removeClass("hovered")
                $(this).children().addClass("disable")
            }
        }
    })
    $(document).on('click',function (e) {
        let el = '.hovered';
        if ($(e.target).closest(el).length) return;
        $(".register-menu, .login-menu").addClass("disable")
        $(".register, .login").removeClass("hovered")
    });

    $(".register-submit").on("click", function () {
        let data = {};

        if($(".register-name").val() != '' && $(".register-email").val() != '' && $(".register-password").val() != ''){
            data = {
                name: $(".register-name").val(),
                email: $(".register-email").val(),
                password: $(".register-password").val()
            }
        }

        $.ajax({
            type: "POST",
            url: document.location.origin + "/user/register",
            data: data,
            dataType: "text",
            success: function (msg) {
                console.log("Прибыли данные: " + msg);
            }
        })
    })

    $(".login-submit").on("click", function () {
        let data = {};

        if($(".login-name").val() != '' && $(".login-password").val() != ''){
            data = {
                name: $(".login-name").val(),
                password: $(".login-password").val(),

            }
        }

        $.ajax({
            type: "POST",
            url: document.location.origin + "/user/logIn",
            data: data,
            dataType: "text",
            success: function (data)
            {
                if($(".remember-password").attr('checked') == 'checked')
                {
                    user.logIn(data)
                    document.cookie = "name=" + user.name
                    document.cookie = "password=" + user.password
                }
                else if ($(".remember-password").attr('checked') != 'checked')
                {
                    user.logIn(data)
                    sessionStorage.setItem("name", user.name)
                    sessionStorage.setItem("password", user.password)
                }
            }
        })
    })
    console.log(document.cookie)
    user.checkAuthorization();
    console.log(document.cookie)
})

class User
{
    userMenu = "<div class=\"menu-item col-2 row\"><a class='menu-orders col-6' href=\"/orders\">Your orders</a>" +
        "<a onclick='logOut()' class='logOut col-6' style='margin-left: 10px'></a></div>"

    logIn(data, user = splitCookie())
    {
        if(data == true)
        {
            if(user['name'] == '' && user['password'] == ''){
                this.name = $(".login-name").val()
                this.password = $(".login-password").val()
            }
            else if(sessionStorage.length == 0){
                this.name = $(".login-name").val()
                this.password = $(".login-password").val()
            }

            $.cookie('name', this.name)
            $.cookie('password', this.password)

            $(".user-form").children().remove()
            $(".user-form").append(this.userMenu);
        }
    }

    checkAuthorization(user = splitCookie())
    {
        if(user['name'] != '' && user['password'] != ''){
            this.name = user['name']
            this.password = user['password']
            console.log(this)
            this.logIn(true)
            console.log(this)
        }
        else if(sessionStorage.length != 0){
            this.name = sessionStorage.getItem('name')
            this.password = sessionStorage.getItem('password')
            this.logIn(true)
        }
        // else if(localStorage.getItem('name') != null){    // this part if i reforge authorization
        //     console.log(localStorage)
        // }
    }

     logOut()
    {
        delCookie()
        sessionStorage.clear()
        window.location.assign('/');
    }
}

function deleteAllCookies()
{
    let cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++)
    {
        let cookie = cookies[i];
        let eqPos = cookie.indexOf("=");
        let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
// deleteAllCookies()

function splitCookie()
{
    let cookies = document.cookie.split(";");
    let user = {name:'', password:''}

    for (let i = 0; i < cookies.length; i++)
    {
        let cookie = cookies[i];
        let eqPos = cookie.split("=");

        if(eqPos[0].replace(" ", "") == 'name')
        {
            eqPos[0] = eqPos[0].replace(" ", "")
            user.name = eqPos[1]
        }
        else if(eqPos[0].replace(" ", "") == 'password')
        {
            eqPos[0] = eqPos[0].replace(" ", "")
            user.password = eqPos[1]
        }
    }
    return user
}

function delCookie()
{
    $.removeCookie('name')
    $.removeCookie('password')
}

function logOut() {
    delCookie()
    sessionStorage.clear()
    window.location.assign('/');
}
