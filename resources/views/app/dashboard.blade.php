@extends('public.master.layout') @section('css') {{ Html::style("css/dashboard.css") }} @endsection @section('main-content')



<div class="grid-container full">
        <div class="grid-x">
        <div class="cell small-3 show-for-large">
            <div class="side-nav">
                <div class="site-logo">
                    <img src="{{url('img/f-logo.svg')}}" class="logo">
                </div>
                <div class="side-nav-list">
                    <ul>
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cell small-12 large-9" style="margin-top: 48px;">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 medium-6">
                    <div class=" grid-x grid-margin-x module-buttons">
                        <div class="cell small-6">
                            <button class="button">Create Group</button>
                        </div> 
                        <div class="cell small-6">
                            <button class="button">Join Group</button>
                        </div>
                    </div>

                    <div class="module module-group-actions">
                        <h3>Group Actions</h3>
                        <div class="links">
                            <a class="link">
                                <img src="{{url('img/f-logo.svg')}}">
                                <p>Add a user</p>
                            </a>
                            <a class="link">
                                <img src="{{url('img/f-logo.svg')}}">
                                <p>Transaction</p>
                            </a>
                            <a class="link">
                                <img src="{{url('img/f-logo.svg')}}">
                                <p>Settings</p>
                            </a>
                            <a class="link">
                                <img src="{{url('img/f-logo.svg')}}">
                                <p>Report</p>
                            </a>
                        </div>
                        <p class="caption"> Actions are applied to <u>Homeboyes</u> group </p>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="cell small-6">
                            <div class="module module-overview spent">
                                <div class="text">
                                    <span>
                                        <h3>Spent</h3>
                                        <h3 class="amount">-$120.43</h3>
                                    </span>
                                    <a class="arrow">
                                        <img src="{{url('img/arrow-right.png')}}">
                                    </a>
                                </div>
                                <select>
                                    <option value="fuck" selected>This month</option>
                                    <option value="fuck">fuck</option>
                                    <option value="you">you</option>
                                    <option value="pepsi">pepsi</option>
                                    <option value="faggot">faggot</option>
                                </select>
                            </div>
                        </div>
                        <div class="cell small-6">
                            <div class="cell small-6">
                                <div class="module module-overview received">
                                    <div class="text">
                                        <span>
                                            <h3>Received</h3>
                                            <h3 class="amount">$42.30</h3>
                                        </span>
                                        <a class="arrow">
                                            <img src="{{url('img/arrow-right.png')}}">
                                        </a>
                                    </div>
                                    <select>
                                        <option value="fuck" selected>This month</option>
                                        <option value="fuck">fuck</option>
                                        <option value="you">you</option>
                                        <option value="pepsi">pepsi</option>
                                        <option value="faggot">faggot</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="module module-messages">
                        <h3>Messages</h3>
                        <div class="messages">
                            @for ($i = 0; $i < 3; $i++)
                            <div class="message">
                                <div class="content">
                                    <p class="text">Can You send me the generated monthly report pls? Nigga pls.</p>
                                    <a class="arrow"><img src="{{url('img/arrow-right.png')}}"> </a>
                                </div>
                                <div class="bottom-buttons">
                                    <div class="left">
                                        <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-flag-o" aria-hidden="true"></i></a>
                                    </div>
                                    <a class="author">
                                        Sunish Manandhar
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-6">
                    <div class="module module-transactions">
                        <div class="transaction-header">
                            <h3>Latest Transaction</h3>
                            <a href="#"> View all </a>
                        </div>
                         @for ($i = 0; $i < 3; $i++)
                        <div class="grid-x transaction">
                            <div class="cell small-9 content">
                                <p class="date"> 02 Aug 2017 </p>
                                <p class="name">Eggs and bread</p>
                                <p class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Coles, Westmead</p>
                            </div>
                            <p class="cell small-2 price"> $9.08 </p>
                            <a class="cell small-1 arrow">
                                <img src="{{url('img/arrow-right.png')}}">
                            </a>
                        </div>
                         @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection