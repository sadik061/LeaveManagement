<?php include 'template/header.php';?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row mt">
                <?php include 'template/sidebar.php';?>

                <div class="col-sm-9" style="margin-left: 25%;">
                    <section class="panel">
                        <header class="panel-heading wht-bg">
                            <h4 class="gen-case">
                                Inbox (3)
                                <form action="#" class="pull-right mail-src-position">
                                    <div class="input-append">
                                        <input type="text" class="form-control " placeholder="Search Mail">
                                    </div>
                                </form>
                            </h4>
                        </header>
                        <div class="panel-body minimal">
                            <div class="mail-option">
                                <div class="chk-all">
                                    <div class="pull-left mail-checkbox">
                                        <input type="checkbox" class="">
                                    </div>
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" href="#" class="btn mini all">
                                            All
                                            <i class="fa fa-angle-down "></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"> None</a></li>
                                            <li><a href="#"> Read</a></li>
                                            <li><a href="#"> Unread</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                        <i class=" fa fa-refresh"></i>
                                    </a>
                                </div>
                                <div class="btn-group hidden-phone">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                                        More
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                                        Move to
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                        <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-50 of 99</span></li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                    </li>
                                    <li>
                                        <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-inbox-wrap ">
                                <table class="table table-inbox table-hover">
                                    <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message  dont-show"><a href="mail_view.html">Google Inc.</a></td>
                                        <td class="view-message "><a href="mail_view.html">Your new account is ready.</a></td>
                                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message  text-right">08:10 AM</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show"><a href="mail_view.html">Mark Thompson</a></td>
                                        <td class="view-message"><a href="mail_view.html">Last project updates</a></td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 15</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show"><a href="mail_view.html">Wonder Corp.</a></td>
                                        <td class="view-message"><a href="mail_view.html">Thanks for your registration</a></td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 15</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                                        <td class="view-message"><a href="mail_view.html">New Friendship Request</a></td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 13</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show"><a href="mail_view.html">Mark Webber <span class="label label-danger pull-right">urgent</span></a></td>
                                        <td class="view-message"><a href="mail_view.html">The server is down</a></td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 09</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                                        <td class="view-message"><a href="mail_view.html">New message from Patrick S.</a></td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">March 08</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Paypal inc.</td>
                                        <td class="view-message">New payment received</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">March 04</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Andrea <span class="label label-success pull-right">girlfriend</span></td>
                                        <td class="view-message view-message">Weekend plans</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 04</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">David Green</td>
                                        <td class="view-message view-message">Soccer tickets</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">February 22</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Evelyn <span class="label label-info pull-right">family</span></td>
                                        <td class="view-message view-message">Surprise party</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">February 19</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Martin Moore</td>
                                        <td class="view-message">Hey mate!</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">February 17</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="dont-show">Facebook</td>
                                        <td class="view-message">Paul published on your wall</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">February 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Steve Stoll</td>
                                        <td class="view-message">Update developed</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">February 11</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="dont-show">Laura Anton</td>
                                        <td class="view-message view-message">New subscription</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">January 14</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Ryanair</td>
                                        <td class="view-message">Your flight tickets</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">January 07</td>
                                    </tr>
                                    <tr class="">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Twitter</td>
                                        <td class="view-message">Password reset</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">January 04</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- /wrapper -->
    </section>

<?php include 'template/footer.php';?>