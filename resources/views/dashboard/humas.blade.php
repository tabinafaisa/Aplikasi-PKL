@extends('template.layout')
@section('content')
<div id="main-wrapper">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="header-content">
                        <div class="header-left">
                            <div class="brand-logo">
                                <a href="index.html">
                                    <img src="{{asset('assets')}}/images/logo.png" alt="" />
                                    <span>Qash</span>
                                </a>
                            </div>
                            <div class="search">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Here" />
                                        <span class="input-group-text"><i class="icofont-search"></i></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="header-right">
                            <div class="dark-light-toggle" onclick="themeToggle()">
                                <span class="dark"><i class="icofont-moon"></i></span>
                                <span class="light"><i class="icofont-sun-alt"></i></span>
                            </div>
                            <div class="notification dropdown">
                                <div class="notify-bell" data-toggle="dropdown">
                                    <span><i class="icofont-alarm"></i></span>
                                </div>
                                <div class="
                        dropdown-menu dropdown-menu-right
                        notification-list
                      ">
                                    <h4>Announcements</h4>
                                    <div class="lists">
                                        <a href="#" class="">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3 icon success"><i class="icofont-check"></i></span>
                                                <div>
                                                    <p>Account created successfully</p>
                                                    <span>2020-11-04 12:00:23</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3 icon fail"><i class="icofont-close"></i></span>
                                                <div>
                                                    <p>2FA verification failed</p>
                                                    <span>2020-11-04 12:00:23</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3 icon success"><i class="icofont-check"></i></span>
                                                <div>
                                                    <p>Device confirmation completed</p>
                                                    <span>2020-11-04 12:00:23</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="">
                                            <div class="d-flex align-items-center">
                                                <span class="me-3 icon pending"><i class="icofont-warning"></i></span>
                                                <div>
                                                    <p>Phone verification pending</p>
                                                    <span>2020-11-04 12:00:23</span>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="{{asset('assets')}}/settings-activity.html">More <i class="icofont-simple-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="profile_log dropdown">
                                <div class="user" data-toggle="dropdown">
                                    <span class="thumb"><img src="{{asset('assets')}}/images/profile/2.png" alt="" /></span>
                                    <span class="arrow"><i class="icofont-angle-down"></i></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="user-email">
                                        <div class="user">
                                            <span class="thumb"><img src="{{asset('assets')}}/images/profile/2.png" alt="" /></span>
                                            <div class="user-info">
                                                <h5>Jannatul Maowa</h5>
                                                <span>Qash.inc@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-balance">
                                        <div class="available">
                                            <p>Available</p>
                                            <span>0.00 BTC</span>
                                        </div>
                                        <div class="total">
                                            <p>Total</p>
                                            <span>0.00 USD</span>
                                        </div>
                                    </div>
                                    <a href="profile.html" class="dropdown-item">
                                        <i class="icofont-ui-user"></i>Profile
                                    </a>
                                    <a href="wallet.html" class="dropdown-item">
                                        <i class="icofont-wallet"></i>Wallet
                                    </a>
                                    <a href="settings-profile.html" class="dropdown-item">
                                        <i class="icofont-ui-settings"></i> Setting
                                    </a>
                                    <a href="settings-activity.html" class="dropdown-item">
                                        <i class="icofont-history"></i> Activity
                                    </a>
                                    <a href="lock.html" class="dropdown-item">
                                        <i class="icofont-lock"></i>Lock
                                    </a>
                                    <a href="signin.html" class="dropdown-item logout">
                                        <i class="icofont-logout"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <div class="brand-logo">
            <a href="index.html"><img src="{{asset('assets')}}/images/logo.png" alt="" /> </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="index.html" data-toggle="tooltip" data-placement="right" title="Home">
                        <span><i class="icofont-ui-home"></i></span>
                    </a>
                </li>
                <li>
                    <a href="trade.html" data-toggle="tooltip" data-placement="right" title="Trade">
                        <span><i class="icofont-stack-exchange"></i></span>
                    </a>
                </li>
                <li>
                    <a href="wallet.html" data-toggle="tooltip" data-placement="right" title="Wallet">
                        <span><i class="icofont-wallet"></i></span>
                    </a>
                </li>
                <li>
                    <a href="price.html" data-toggle="tooltip" data-placement="right" title="Price">
                        <span><i class="icofont-price"></i></span>
                    </a>
                </li>
                <li class="logout">
                    <a href="{{url('logout')}}" data-toggle="tooltip" data-placement="right" title="Signout">
                        <span><i class="icofont-power"></i></span>
                    </a>
                </li>
            </ul>

            <p class="copyright">&#169; <a href="#">codeefly</a></p>
        </div>
    </div>

    

    <div class="content-body">
        <div class="container">

            <div class="row">
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Master Data Humas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Hash</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12345</td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin</span>
                                            </td>
                                            <td>0</td>
                                            <td>Jan 01</td>
                                            <td>#1236598745565</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>12345</td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin</span>
                                            </td>
                                            <td>0</td>
                                            <td>Jan 01</td>
                                            <td>#1236598745565</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>12345</td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin</span>
                                            </td>
                                            <td>0</td>
                                            <td>Jan 01</td>
                                            <td>#1236598745565</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>12345</td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin</span>
                                            </td>
                                            <td>0</td>
                                            <td>Jan 01</td>
                                            <td>#1236598745565</td>
                                            <td>Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection