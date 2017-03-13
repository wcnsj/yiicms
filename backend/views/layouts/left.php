
<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" width="50" src="" />
                             </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><php>echo $_SESSION['username'];</php></strong>
                             </span> <span class="text-muted text-xs block">个人设置 <b class="caret"></b></span> </span>
                </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li><a href="{:U('TimoManage/Index/profile')}">个人设置</a></li>
                    <li><a href="{:U('TimoManage/Index/modipassword')}">修改密码</a></li>
                    <li class="divider"></li>
                    <li><a href="{:U('TimoManage/Public/logout')}">注销登录</a></li>
                </ul>
            </div>
            <div class="logo-element">
                IN+
            </div>
        </li>
        <li>
            <a href="{:U('TimoManage/Index/index?mlf=x')}"><i class="fa fa-home"></i> <span class="nav-label">系统首页</span>  </a>
        </li>
        
        <li>
            <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">平台管理</span><span class="fa arrow"></span></a>

            <ul class="nav nav-second-level collapse">
                <li><a href="{:U('TimoManage/Platform/system_advertisement?mlf=p&ml=p1')}">广告管理</a></li>
            </ul>
        </li>
        
        <li>
            <a href="#"><i class="fa fa-bars"></i> <span class="nav-label">系统设置</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{:U('TimoManage/System/config?mlf=z&ml=z1')}">配置管理</a></li>
                <li><a href="{:U('TimoManage/System/adminuser?mlf=z&ml=z2')}">管理员</a></li>
                <li><a href="{:U('TimoManage/System/role?mlf=z&ml=z3')}">用户组权限管理</a></li>
                <li><a href="{:U('TimoManage/System/node?mlf=z&ml=z4')}">项目节点管理</a></li>
            </ul>
        </li>
    </ul>

</div>
