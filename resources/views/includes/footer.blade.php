<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>&copy; {{ $company[0]->company_name }} <script>document.write(new Date().getFullYear())</script>. All rights reserved.</p>
                <p>
                    <a href="#" class="mr-2">Privacy Policy</a>
                    <a href="#">Cookie Policy</a>
                </p>
            </div>
            <div class="col-md-4">
                <h4>Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Contact us</h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone mr-2"></i>{{ $company[0]->phone_number }}</li>
                    <li><i class="fa fa-envelope mr-2"></i>{{ $company[0]->email }}</li>
                    <li><i class="fa fa-map-pin mr-2"></i>{{ $company[0]->address }}</li>
                    <li><i class="fa fa-facebook mr-2"></i>{{ $company[0]->facebook }}</li>
                    <li><i class="fa fa-twitter mr-2"></i>{{ $company[0]->twitter }}</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
