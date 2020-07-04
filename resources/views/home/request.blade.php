@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Request</div>

                    <div class="card-body">
                        @foreach($mUsertrees as $level => $mUsertree)
                            <div class="accordion-item">
                                <h3 class="accordion-item__title">
                                    {{ 'Level ' . $level }}
                                    <span class="accordion-item__arrow">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                         clip-rule="evenodd">
                                        <path
                                            d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/>
                                    </svg>
                                </span>
                                </h3>

                                <div class="accordion-item__content">
                                    @if(!empty($mUsertree))
                                        @foreach($mUsertree as $i => $usertree)
                                            <div class="entry p-4">
                                                <div class="card mb-4 usertreeCard" style="width: 100%">
                                                    <img
                                                        class="card-img-top usertreeImage {{ $usertree->photo ? '' : 'btnInputimage' }} "
                                                        src="{{ $usertree->photo ? $usertree->photo : asset('img/default-photo.jpg') }}"
                                                        alt="Card image cap">
                                                    <input type="file" class="d-none inputImage" name="photo_id"
                                                           data-parentid="{{ $usertree->user_id }}">
                                                    <input type="text" class="d-none" name="parent_id"
                                                           value="{{ $usertree->user_id }}">
                                                    <div class="card-body">
                                                        <h5 class="card-title usertreeStatus"><label>Status
                                                                : {{ $usertree->status_photo }}</label></h5>
                                                        <p class="card-text">{{ 'Name : ' . $usertree->user->name }}</p>
                                                        <p class="card-text">{{ 'Bank : ' . $usertree->user->userdetail->bank->name }}</p>
                                                        <p class="card-text">{{ 'No. Rekening : ' . $usertree->user->userdetail->bank_account_number }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="entry p-4">
                                            <p>No Data Available</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach



                        {{--                        <div class="container">--}}
                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h3 class="accordion-item__title">--}}
                        {{--                                    Lorem ipsum dolor sit amet.--}}
                        {{--                                    <span class="accordion-item__arrow">--}}
                        {{--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path--}}
                        {{--                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/></svg>--}}
                        {{--            </span>--}}
                        {{--                                </h3>--}}

                        {{--                                <div class="accordion-item__content">--}}
                        {{--                                    <div class="entry">--}}
                        {{--                                        <p>--}}
                        {{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
                        {{--                                            Voluptate rerum quia ea dolor sed quos hic laborum, numquam--}}
                        {{--                                            illo ratione molestias explicabo nihil mollitia qui modi--}}
                        {{--                                            perferendis id voluptas vel.--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h3 class="accordion-item__title">--}}
                        {{--                                    Lorem ipsum dolor sit amet.--}}
                        {{--                                    <span class="accordion-item__arrow">--}}
                        {{--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path--}}
                        {{--                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/></svg>--}}
                        {{--            </span>--}}
                        {{--                                </h3>--}}

                        {{--                                <div class="accordion-item__content">--}}
                        {{--                                    <div class="entry">--}}
                        {{--                                        <p>--}}
                        {{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
                        {{--                                            Voluptate rerum quia ea dolor sed quos hic laborum, numquam--}}
                        {{--                                            illo ratione molestias explicabo nihil mollitia qui modi--}}
                        {{--                                            perferendis id voluptas vel.--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h3 class="accordion-item__title">--}}
                        {{--                                    Lorem ipsum dolor sit amet.--}}
                        {{--                                    <span class="accordion-item__arrow">--}}
                        {{--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path--}}
                        {{--                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/></svg>--}}
                        {{--            </span>--}}
                        {{--                                </h3>--}}

                        {{--                                <div class="accordion-item__content">--}}
                        {{--                                    <div class="entry">--}}
                        {{--                                        <p>--}}
                        {{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
                        {{--                                            Voluptate rerum quia ea dolor sed quos hic laborum, numquam--}}
                        {{--                                            illo ratione molestias explicabo nihil mollitia qui modi--}}
                        {{--                                            perferendis id voluptas vel.--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="accordion-item">--}}
                        {{--                                <h3 class="accordion-item__title">--}}
                        {{--                                    Lorem ipsum dolor sit amet.--}}
                        {{--                                    <span class="accordion-item__arrow">--}}
                        {{--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path--}}
                        {{--                        d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/></svg>--}}
                        {{--            </span>--}}
                        {{--                                </h3>--}}

                        {{--                                <div class="accordion-item__content">--}}
                        {{--                                    <div class="entry">--}}
                        {{--                                        <p>--}}
                        {{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
                        {{--                                            Voluptate rerum quia ea dolor sed quos hic laborum, numquam--}}
                        {{--                                            illo ratione molestias explicabo nihil mollitia qui modi--}}
                        {{--                                            perferendis id voluptas vel.--}}
                        {{--                                        </p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
