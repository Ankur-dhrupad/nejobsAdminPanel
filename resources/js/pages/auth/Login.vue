<template>
    <!-- <div class="login panel"> -->
        <!-- <page-header title="User Login"/> -->
<div class="flex items-center justify-center p-8 min-h-screen bg-white">
  <div class="container">
    <div class="user-data-form modal-content">
        <div class="body">
            <div class="text-center">
							<h1>Hi, Welcome Back!</h1>
							<p>Still don't have an account? <a href="signup.html">Sign up</a></p>
						</div>
                              <div class="form-wrapper m-auto">

            <form class="form relative" @submit.prevent="submit">
                <vue-text-field class="email" id="email" is-large
                    :field="{ placeholder: 'Email', required: true, label:'Email' }"
                    :form="form"/>
                <vue-password-field id="password" is-large
                    :field="{ placeholder: 'Password', required: true, label: 'Password' }"
                    :form="form"/>
                <vue-switch-field id="remember"
                    :field="{ label: 'Remember Me' }"
                    :form="form"/>
            </form>
                              </div>
             <!-- <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="text-center">
							<h2>Hi, Welcome Back!</h2>
							<p>Still don't have an account? <a href="signup.html">Sign up</a></p>
						</div>
						<div class="form-wrapper m-auto">
							<form action="#" class="mt-10">
								<div class="row">
									<div class="col-12">
										<div class="input-group-meta position-relative mb-25">
											<label>Email*</label>
											<input type="email" placeholder="rshdkabir@gmail.com">
										</div>
									</div>
									<div class="col-12">
										<div class="input-group-meta position-relative mb-20">
											<label>Password*</label>
											<input type="password" placeholder="Enter Password" class="pass_log_id">
											<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_60.svg" alt=""></span></span>
										</div>
									</div>
									<div class="col-12">
										<div class="agreement-checkbox d-flex justify-content-between align-items-center">
											<div>
												<input type="checkbox" id="remember">
												<label for="remember">Keep me logged in</label>
											</div>
											<a href="#">Forget Password?</a>
										</div> 
									</div>
									<div class="col-12">
										<button class="btn-eleven fw-500 tran3s d-block mt-20">Login</button>
									</div>
								</div>
							</form>
							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/google.png" alt="">
										<span class="ps-2">Login with Google</span>
									</a>
								</div>
								<div class="col-md-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/facebook.png" alt="">
										<span class="ps-2">Login with Facebook</span>
									</a>
								</div>
							</div>
							<p class="text-center mt-10">Don't have an account? <a href="signup.html" class="fw-500">Sign up</a></p>
						</div>
					
                    </div>
                </div> -->
        <!-- </div> -->
    </div></div>
    
    <div class="submit container">
<primevue-button label="Login" class="p-button-success w-full" @click="submit" />
                <div class="flex">
                    <span v-if="meta.allow_registration">
                        <Link href="/register">
                            <span>Register</span>
                        </Link>
                        &nbsp; &bull; &nbsp;
                    </span>
                    <span>
                        <Link href="/forgot-password">
                            <span>Forgot Password</span>
                        </Link>
                    </span>
                </div>
            </div>
    </div>
            
    </div>
</template>

<script>
import { Link, useForm } from '@inertiajs/vue3';
import AppLayout from '@/layouts/App.vue';
import PageHeader from '@/components/ui/pages/PageHeader.vue';
import PrimevueButton from 'primevue/button/Button.vue';
import VuePasswordField from '@/components/forms/fields/PasswordField.vue';
import VueSwitchField from '@/components/forms/fields/SwitchField.vue';
import VueTextField from '@/components/forms/fields/TextField.vue';

export default {
    layout: AppLayout,

    components: {
        Link,
        PageHeader,
        PrimevueButton,
        VuePasswordField,
        VueSwitchField,
        VueTextField,
    },

    inject: ['meta'],

    props: {
        form: {
            type: Object,
            required: true,
        },
    },

    setup (props) {
        const form = useForm(props.form.fields);

        function submit() {
            form.post(props.form.uri);
        }

        return { form, submit };
    },
};
</script>
