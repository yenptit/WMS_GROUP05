<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Verify Your Email Address</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('Check your Email to get new password ( MailTrap).') }}
                        </div>
                    @endif
                    <a href="{{ url('/yReset/'.$token) }}">Click Here to get New Password</a>
                </div>
            </div>
        </div>
    </div>
</div>