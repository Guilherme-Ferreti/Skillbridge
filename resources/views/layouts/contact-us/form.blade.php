<x-page.section>
    <x-card class="contact-us-form">
        @if (session('contact_created'))
            <x-form.success-message :message="__('Message saved successfully! Thank you!')" />
        @else
            <x-form
                class="contact-us-form__form"
                :action="lroute('contact.store')"
            >
                @csrf
                <x-form.group>
                    <label for="first_name">{{ __('First Name') }}</label>
                    <x-form.input
                        id="first_name"
                        type="text"
                        required
                        maxlength="50"
                        name="first_name"
                        :placeholder="__('Enter first name')"
                        value="{{ old('first_name') }}"
                    />
                    @error('first_name')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group>
                    <label for="last_name">{{ __('Last Name') }}</label>
                    <x-form.input
                        id="last_name"
                        type="text"
                        required
                        maxlength="50"
                        name="last_name"
                        :placeholder="__('Enter last name')"
                        value="{{ old('last_name') }}"
                    />
                    @error('last_name')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group>
                    <label for="email">{{ __('E-mail') }}</label>
                    <x-form.input
                        id="email"
                        type="email"
                        required
                        maxlength="50"
                        name="email"
                        :placeholder="__('Enter e-mail')"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group>
                    <label for="phone">{{ __('Phone') }}</label>
                    <x-form.input
                        id="phone"
                        type="tel"
                        required
                        maxlength="20"
                        name="phone"
                        :placeholder="__('Enter phone number')"
                        value="{{ old('phone') }}"
                    />
                    @error('phone')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group spanFull>
                    <label for="subject">{{ __('Subject') }}</label>
                    <x-form.input
                        id="subject"
                        type="text"
                        required
                        maxlength="80"
                        name="subject"
                        :placeholder="__('Enter your subject')"
                        value="{{ old('subject') }}"
                    />
                    @error('subject')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group spanFull>
                    <label for="message">{{ __('Message') }}</label>
                    <x-form.textarea
                        id="message"
                        name="message"
                        name="message"
                        required
                        :placeholder="__('Enter your message here...')"
                        maxlegth="1000"
                    >
                        {{ old('message') }}
                    </x-form.textarea>
                    @error('message')
                        <x-form.error-message :$message />
                    @enderror
                </x-form.group>

                <x-form.group spanFull>
                    <x-button
                        type="submit"
                        :name="__('Send Your Message')"
                        color="primary"
                    />
                </x-form.group>
            </x-form>
        @endif

        <section
            class="contact-us-form__info flex-grid"
            aria-label="{{ __('Our contact information') }}"
        >
            <x-card class="contact-us-form__info-card">
                <x-icons.mail role="presentation" />
                <x-basic-link
                    to="mailto:hello@skillbridge.com"
                    target="_blank"
                    rel="external"
                    name="hello@skillbridge.com"
                />
            </x-card>

            <x-card class="contact-us-form__info-card">
                <x-icons.phone role="presentation" />
                <x-basic-link
                    to="tel:+91 91813 23 2309"
                    name="+91 91813 23 2309"
                />
            </x-card>

            <x-card class="contact-us-form__info-card">
                <x-icons.map-pin role="presentation" />
                <x-basic-link
                    to="https://maps.app.goo.gl/euWuHEXQqwT9q6RAA"
                    target="_blank"
                    rel="external"
                    lang="en-us"
                    name="Somewhere in the World"
                />
            </x-card>

            <x-card class="contact-us-form__info-card contact-us-form__info-card--social-profiles">
                <p>{{ __('Social Profiles') }}</p>
                <x-social-profiles-links />
            </x-card>
        </section>
    </x-card>
</x-page.section>
