<form action="{{ route('contact_mail_send') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="currentURL" value="{{ request()->url() }}">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <label for="Name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name and surname">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-sm-12 col-lg-6">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter your email address">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>

        </div>
        <div class="col-md-12 mt-2">
            <label for="Subject" class="form-label">Subject</label>
            <input type="text" name="subject" placeholder="Subject" class="form-control">
            <span class="text-danger">
                @error('subject')
                    {{ $message }}
                @enderror
            </span>

        </div>
        <div class="col-md-12 mt-2">
            <label for="Message" class="form-label">Message</label>
            <textarea name="message" placeholder="Message" class="form-control"></textarea>
            <span class="text-danger">
                @error('message')
                    {{ $message }}
                @enderror
            </span>
        </div>
    </div>
    <button type="submit" class="btn mt-2 submit-org-btn">Submit</button>

</form>
