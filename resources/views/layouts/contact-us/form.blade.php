<x-page.section>
    <x-card class="contact-us-form">
        <x-form class="contact-us-form__form">
            <x-form.group>
                <label for="first_name">{{ __('First Name') }}</label>
                <x-form.input
                    id="first_name"
                    type="text"
                    required
                    maxlength="255"
                    name="first_name"
                    :placeholder="__('Enter first name')"
                />
            </x-form.group>

            <x-form.group>
                <label for="last_name">{{ __('Last Name') }}</label>
                <x-form.input
                    id="last_name"
                    type="text"
                    required
                    maxlength="255"
                    name="last_name"
                    :placeholder="__('Enter last name')"
                />
            </x-form.group>

            <x-form.group>
                <label for="email">{{ __('E-mail') }}</label>
                <x-form.input
                    id="email"
                    type="email"
                    required
                    maxlength="255"
                    name="email"
                    :placeholder="__('Enter e-mail')"
                />
            </x-form.group>

            <x-form.group>
                <label for="phone">{{ __('Phone') }}</label>
                <x-form.input
                    id="phone"
                    type="tel"
                    required
                    maxlength="255"
                    name="phone"
                    :placeholder="__('Enter phone number')"
                />
            </x-form.group>

            <x-form.group spanFull>
                <label for="subject">{{ __('Subject') }}</label>
                <x-form.input
                    id="subject"
                    type="text"
                    required
                    maxlength="255"
                    name="subject"
                    :placeholder="__('Enter your subject')"
                />
            </x-form.group>

            <x-form.group spanFull>
                <label for="message">{{ __('Message') }}</label>
                <x-form.textarea
                    id="message"
                    name="message"
                    name="message"
                    required
                    :placeholder="__('Enter your message here...')"
                ></x-form.textarea>
            </x-form.group>

            <x-form.group spanFull>
                <x-button
                    type="submit"
                    :name="__('Send Your Message')"
                    color="primary"
                />
            </x-form.group>
        </x-form>

        <div class="contact-us-form__info">
            <x-card>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam fugiat aliquam, minima nobis quae, iusto saepe unde in impedit
                    temporibus, id recusandae est dolores eaque alias aliquid perspiciatis tenetur nihil.
                </p>
            </x-card>
        </div>
    </x-card>
</x-page.section>
