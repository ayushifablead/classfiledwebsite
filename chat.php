<style>
     .chat-app .people-list {
    /*width: 280px;*/
    /*position: absolute;*/
    left: 0;
    top: 0;
    padding: 20px;
  
}
.card-header{
        padding: 7px 35px!important;
    margin-bottom: 15px!important;
    border: none !important;
    background: #1E1E2D !important;
    color: #f6f9ff !important;
}
.card-title, .card-title a{
    color: #f6f9ff!important;
}
.chat-app .chat {
    /*margin-left: 280px;*/
    border-left: 1px solid #eaeaea;
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s;
}

.people-list .chat-list li {
    padding: 15px 15px;
    list-style: none;
    border-radius: 3px;
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer;
}

.people-list .chat-list li.active {
    background: #efefef;
}

.people-list .chat-list li .name {
    font-size: 20px;
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%;
}

.people-list img {
    float: left;
    border-radius: 50%;
}

.people-list .about {
    float: left;
    padding-left: 8px;
}

.people-list .status {
    color: #999;
    font-size: 13px;
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6;
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px;
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px;
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff;
}

.chat .chat-history ul {
    padding: 0;
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px;
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px;
}

.chat .chat-history .message-data {
    margin-bottom: 15px;
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px;
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px;
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative;
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px;
}

.chat .chat-history .my-message {
    background: #efefef;
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right;
    margin-bottom: 30px;
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 75%;
}

.chat .chat-message {
    padding: 20px;
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle;
}

.online {
    color: #86c541;
}

.offline {
    color: #e47297;
}

.me {
    color: #1d8ecd;
}

.float-right {
    float: right;
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}
.text-right{
    float:right;
}
.quick-filters button {
      border-radius: 20px;
      margin-right: 6px;
      margin-top: 6px;
    }
    .message-item {
      border-bottom: 1px solid #e9ecef;
      padding: 15px 10px;
      cursor: pointer;
    }
    .message-item:hover {
      background-color: #f8f9fa;
    }
    .message-item img {
      border-radius: 50%;
      width: 40px;
      height: 40px;
    }
    .message-item .message-text {
      font-size: 14px;
      color: #6c757d;
    }
    .message-item .time {
      font-size: 12px;
      color: #adb5bd;
    }
     .chat-history img {
    border-radius: 40px;
    width: 40px;
}
.quick-filters{
    display: flex;
}
@media only screen and (max-width: 767px) {
   .chat-app .people-list {
           border-bottom: 2px solid #f4f7f6;
    /*    height: 465px;*/
    /*    width: 100%;*/
    /*    overflow-x: auto;*/
    /*    background: #fff;*/
    /*    left: -400px;*/
    /*    display: none*/
    padding: 15px 0px;
  }
    .chat-app .people-list.open {
        left: 0;
    }
    .chat-app .chat {
        margin: 0;
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0;
        padding: 12px 0px;
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto;
    }
    .quick-filters{
    display: block;
    }
    .message-item{
       padding: 12px 0px;
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto;
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto;
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto;
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto;
    }
}
</style>
<?php include 'header.php'; ?>

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="img/categories/slider-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chat</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="section mt-5 mb-5" id="">
      <div class="row">
        <div class="col-lg-12">
             <div class="card-body">
                <div class="row clearfix justify-content-center">
                     <div class="col-lg-11">
        <div class="card chat-app">
            <div class="row">
                <div class="col-md-4">
                         <div id="plist" class="people-list">
                <div class="input-group">
                        <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></span>
                                </div>
                   
                </div>

                <div class="quick-filters mb-4 mt-2">
      <button class="btn btn-outline-primary active">All</button>
      <button class="btn btn-outline-primary">Meeting</button>
      <button class="btn btn-outline-primary">Unread</button>
      <button class="btn btn-outline-primary">Important</button>
    </div>

    <!-- Messages -->
    <div class="message-item d-flex">
      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User Image" class="">
      <div class="flex-grow-1 pl-3">
        <h6 class="mb-1">User</h6>
        <p class="mb-0 message-text">Cod available <br><span>✔ Is it available?</span></p>
      </div>
      <span class="time">15:19</span>&nbsp;&nbsp;
      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </div>

    <div class="message-item d-flex">
      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User Image" class="">
      <div class="flex-grow-1 pl-3">
        <h6 class="mb-1">User</h6>
        <p class="mb-0 message-text"><span>✔ Hello!!</span></p>
      </div>
      <span class="time">15:19</span>&nbsp;&nbsp;
      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
    </div>


  </div>
                
                <!-- <ul class="list-unstyled chat-list mt-2 mb-0">
                   
                    <li class="clearfix active">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                        <div class="about">
                            <div class="name">Aiden Chavez</div>
                            <div class="status"> <i class="fa fa-circle online"></i> online </div>
                        </div>
                    </li>
                                                      
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                        <div class="about">
                            <div class="name">Christian Kelly</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
                        </div>
                       
                    </li>
                   
                    <li class="clearfix">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                        <div class="about">
                            <div class="name">Dean Henry</div>
                            <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
                        </div>
                    </li>
                </ul> -->
            </div>
             
                <div class="col-md-8">
                     <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                            </a>
                            <div class="chat-about">
                                <h4 class="m-b-0">Aiden Chavez</h4>
                                <small>Last seen: 2 hours ago</small>
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-sm text-right">
                         
                            <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-flag"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-phone"></i></a>
                            <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        <!-- <li class="clearfix">
                            <div class="message-data text-right">
                                <span class="message-data-time">10:10 AM, Today</span>
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                            </div>
                            <div class="message other-message float-right"> Hi Aiden! </div>
                        </li> -->
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar" class="float-right mt-5" style="">
                            <div class="message-data text-right">
                                <div class="message-data-time mb-3">10:10 AM, Today</div>
                                    <div class="message other-message float-right"> Hi Aiden! </div>
                            </div>
                        </li>

                       <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time pl-5">10:12 AM, Today</span>
                            </div>
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                            <div class="message my-message">Are we meeting today?</div>                                    
                        </li>                              
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar" class="float-left mt-5" style="">
                            <div class="message-data text-left">
                                <div class="message-data-time mb-3">10:10 AM, Today</div>
                                    <div class="message my-message float-left"> Are we meeting today?</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar" class="float-right mt-5" style="">
                            <div class="message-data text-right">
                                <div class="message-data-time mb-3">10:10 AM, Today</div>
                                    <div class="message other-message float-right"> Is it available? </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        <!--<div class="input-group-prepend">-->
                        <!--    <span class="input-group-text"><i class="fa fa-send"></i></span>-->
                        <!--</div>-->
                                <div class="input-group send-area">
                                    <input type="text" class="form-control" placeholder="Enter text here...">
                                    <span class="input-group-text"><a href=""><i class="fa fa-paper-plane text-primary fs-3"></i></a></span>
                                </div>
                                                       
                    </div>
                </div>
            </div>
                </div>
            </div>
       
           
        </div>
    </div>
                </div>
            </div>
      
    </div>
</div>
</section>


<?php include 'footer.php'; ?>


