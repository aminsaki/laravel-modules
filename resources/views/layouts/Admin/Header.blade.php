        <!-- start Header  -->
        <header class="mina__header">
            <div class="mina__header--container">
                <div class="logo__row">
                    <a href="/" class="logo">
                        <img src="{{url('public/images/Logo.svg')}}" alt="" srcset=""/>
                    </a>
                    <p>سامانه جامع مشتریان</p>
                </div>
                <nav class="nav">
                    <div class="dropdown">
                        <button class="btn__dropdown btn__dropdown__more"></button>
                        <div class="dropdown__items">
                            <ul class="dropdown__menu">
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">Admin</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">مدیریت</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">اولویت ها</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">آخرین بازدید</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="{{url('/logout')}}" class="link">خروج</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="dropdown u-margin-left-5">
                        <button class="btn__dropdown btn__dropdown__plus"></button>

                        <div class="dropdown__items">
                            <ul class="dropdown__menu">
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">ایجاد کردن</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">حساب</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">مخاطب</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">لید</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">فرصت</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">جلسه</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">تماس تلفنی</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">وظیفه</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">پرونده</a>
                                </li>
                                <li class="dropdown__menu--item">
                                    <a href="#" class="link">پست الکترونیک</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="dropdown u-margin-left-5">
                        <button class="btn__dropdown btn__dropdown__bell"></button>
                        <div class="dropdown__items notifications">
                            <div class="notifications__container">
                                <div class="notif__header">
                                    <div class="notif__header--item">
                                        <h3>اعلان ها</h3>
                                        <p>علامت زده به خواندخه شده</p>
                                    </div>
                                </div>
                                <div class="notif__body">
                                    <div class="notif__container">
                                        <div class="notif__item">
                                            <div class="notif__item--avtor">
                                                <div class="avtor__wapper">
                                                    <img src="dist/images/png.png" alt=""/>
                                                </div>
                                            </div>
                                            <div class="notif__item--caption">
                                                <div class="caption__title">
                                                    <h4>کدهای فروش رفته تست جدید</h4>
                                                </div>
                                                <div class="caption__link">
                                                    <a href="#"> sold cod create assign to you </a>
                                                </div>
                                                <div class="caption__text">
                                                    <p>
                                                        کدهای فروش رفته تست جدید کدهای فروش رفته تست جدید
                                                        کدهای فروش رفته تست جدید کدهای فروش رفته تست جدید
                                                        کدهای فروش رفته تست جدید کدهای فروش رفته تست جدید
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="notif__item--datetime">
                                                <div class="notif__item--datetime--title">
                                                    <span>1400-12-10</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more__notif" id="more__notif">بیشتر</div>
                                </div>
                                <div class="notif__footer">
                                    <a href="#" class="notif__footer--link"> مشاهده بیشتر </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown u-margin-left-5">
                        <button class="btn__dropdown btn__dropdown__note"></button>
                        <div class="dropdown__items noetbook">
                            <div class="noetbook__container">
                                <div class="noetbook__header">
                                    <div class="noetbook__header--row">
                                        <h3>یادداشت های من</h3>
                                    </div>
                                </div>
                                <div class="noetbook__body">
                                    <div class="noetbook__body--row" id="Mynotebooke">
                                        <div class="noetbook--item">
                                            <p class="noetbook__pragraf">یادداشت های من</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="noetbook__footer">
                                    <a href="" class="noetbook__footer--link"> یادداشت جدید </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown__search u-margin-left-5">
                        <form class="item__search__bar">
                            <button class="btn__search"></button>
                            <input type="text" class="search" placeholder="جستجو کردن"/>
                            <div class="show__result" style="display: none">
                                <div class="show__result--header">
                                    <div class="show__result--header--title">
                                        <p>جستجو</p>
                                    </div>
                                </div>
                                <div class="show__result--body">
                                    <div class="result__items">
                                        <a href="" class="link__result">نتیجه جستجو</a>
                                        <span class="badge-sussess">حساب</span>
                                    </div>
                                    <div class="result__items">
                                        <a href="" class="link__result">نتیجه جستجو</a>
                                        <span class="badge-sussess">حساب</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end Header    -->





