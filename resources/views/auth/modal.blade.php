<div class="modal" id="authModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeModal()">&times;</button>
        <h2>Welcome back</h2>
        <p>Sign in to continue to ProMatch</p>
        
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div class="form-group">
              <label>Full name</label>
              <input type="text" name="name" value="{{ old('name') }}" placeholder="Jane Doe" required>
              @error('name')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
          
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>
              @error('email')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
          
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" placeholder="Create a strong password" required>
              @error('password')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
          
            <div class="form-group">
              <label>Account type</label>
              <select name="intent" required>
                <option value="professional" @selected(old('intent')==='professional')>Professional (seller)</option>
                <option value="client" @selected(old('intent')==='client')>Client (buyer)</option>
              </select>
              @error('intent')<small class="text-danger">{{ $message }}</small>@enderror
            </div>
          
            <button class="btn btn-primary" style="width:100%"   type="submit">Create account</button>
          
            @if ($errors->any())
              <div class="text-danger" style="margin-top:.75rem;">
                {{ $errors->first() }}
              </div>
            @endif
          </form>
          
          
        
        <div class="divider">Or continue with</div>
        
        <div class="social-buttons">
            <!-- Google -->
            <button class="social-btn full-width" onclick="window.location.href='/auth/google/redirect'">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
              </svg>
              <span>Google</span>
            </button>
          
            <!-- Row for GitHub and LinkedIn -->
            <div class="social-row">
              <button class="social-btn" onclick="window.location.href='/auth/github/redirect'">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
                <span>GitHub</span>
              </button>
          
              <button class="social-btn" onclick="window.location.href='{{ route('oauth.redirect', 'linkedin') }}'">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
                <span>LinkedIn</span>
              </button>
            </div>
          </div>
          
    </div>
</div>