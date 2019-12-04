
  

  <div id="start-of-content" class="show-on-focus"></div>




  <div class="application-main " data-commit-hovercards-enabled>
      <main id="js-pjax-container" data-pjax-container>
        

<div class="auth-form px-3" id="login">

    <!-- '"` --><!-- </textarea></xmp> --></option></form>
    <form name =""action="<?php echo base_url(); ?>index.php/site/login_validation"  method="post">
    <input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="KjrG1Hob1uJUSjxSCtlMHXD0JIyPvdVSOHwr90w8bSkCEiWYQcqzrm1r06wPxLFgXPcTRJy91k+BTMEZSDLhYQ==" />      <input type="hidden" name="ga_id" class="js-octo-ga-id-input">
      <div class="auth-form-header p-0">
        <h1>Sign in to Tasker Login System</h1>
      </div>


      <div id="js-flash-container">

</div>


      <div class="auth-form-body mt-3">
      <span class="text-danger"><?php echo validation_errors(); ?></span>
      <?php if($this->session->flashdata('failed_login')) : ?>
                  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('failed_login').'</p>'; ?>
                  <?php endif; ?>
        <label for="login_field">
          Username
        </label>
        <input type="text"  value="<?php echo set_value("username");?>" name="username" id="login_field" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" />       
        
        <label for="password">
          Password 
          <!-- <a class="label-link" href="/password_reset">Forgot password?</a> -->
        </label>
        <input type="password" name="password" id="password" class="form-control form-control input-block" tabindex="2" />
        <input type="hidden" class="js-webauthn-support" name="webauthn-support" value="unknown">
        <input type="hidden" class="js-webauthn-iuvpaa-support" name="webauthn-iuvpaa-support" value="unknown">

        <input type="text" name="required_field_f326" id="required_field_f326" hidden="hidden" class="form-control" />
<input type="hidden" name="timestamp" value="1571501600488" class="form-control" />
<input type="hidden" name="timestamp_secret" value="03c8c95566925c56bc3b29fea659ba204a46ca2eabeb9097baa46504c13b222a" class="form-control" />

        <input type="submit" name="commit" value="Login"  class="btn btn-primary btn-block" data-disable-with="Loggin in…" />
      </div>
</form>

      <!-- <p class="create-account-callout mt-3">
        New to GitHub?
        <a data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;sign in switch to sign up&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;client_id&quot;:&quot;204445863.1571501587&quot;,&quot;originating_request_id&quot;:&quot;94DA:519D:2505739:346F0F1:5DAB3616&quot;,&quot;originating_url&quot;:&quot;https://github.com/login&quot;,&quot;referrer&quot;:null,&quot;user_id&quot;:null}}" data-hydro-click-hmac="73a4b367a290d0da7b13601b5bbc0ee6710199c3482d21a6e6d6e5b910ebf576" data-ga-click="Sign in, switch to sign up" href="/join?source=login">Create an account</a>.
      </p> -->
</div>

      </main>
  </div>

  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    
   

