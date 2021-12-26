@extends('layouts.app')
@section('title')
contact
@endsection
@section('content')
    <section>

        <div class="container">

            <a href="index.html" class="home-link "><i class="fas fa-home "></i></a>
            <span class="px-3">></span>contact

            <div class="pt-4">
                <h5 class="py-3  title-contact">CUSTOMER SERVICE - CONTACT US</h5>


                <form class="card mt-4">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 sm-12 py-4 ps-3 input1">
                                <h5 class="text-muted">send a message</h5>
                                <label for="select" class="pb-2">Subject Heading</label><br>
                                <select name="id-conatct" id="id-contact">

                                    <option selected="selected">-- Choose --</option>
                                    <option>Customer service</option>
                                    <option>Webmaster</option>

                                </select><br>
                                <label for="e-mail" class="pt-2">Email address</label><br>
                                <input type="email"><br>

                                <label for="text" class="pt-2">Order reference</label><br>
                                <input type="text"><br>

                                <label for="select" class="pt-2">Attach File</label><br>
                                <input type="file">

                                <button class="btn btn-dark mt-5 px-3 py-2 send" type="submit">Send<i
                                        class="fas fa-chevron-right ps-2"></i></button>

                            </div>
                            <div class="col-md-8 sm-12 pt-5 mt-2">
                                <label for="massage">Massage</label>
                                <textarea name="" id="" cols="120" rows="10"></textarea>
                            </div>

                        </div><!-- row -->

                    </div><!-- container -->


                </form>

            </div><!-- whole-card -->



        </div><!-- container -->
        <hr><!-- hr -->
    </section>




@endsection
