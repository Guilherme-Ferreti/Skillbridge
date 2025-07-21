@php
    $plans = [
        [
            'name' => 'Free Plan',
            'price_per_month' => 0,
            'price_per_year' => 0,
            'features' => [
                'Access to selected free courses.',
                'Limited course materials and resources.',
                'Basic community support.',
                'No certification upon completion.',
                'Ad-supported platform.',
            ],
            'missing_features' => [
                'Access to exclusive Pro Plan community forums.',
                'Early access to new courses and updates.',
            ],
        ],
        [
            'name' => 'Pro Plan',
            'price_per_month' => 79,
            'price_per_year' => 790,
            'features' => [
                'Unlimited access to all courses.',
                'Unlimited course materials and resources.',
                'Priority support from instructors.',
                'Course completion certificates.',
                'Ad-free experience.',
                'Access to exclusive Pro Plan community forums.',
                'Early access to new courses and updates.',
            ],
            'missing_features' => [],
        ],
    ];
@endphp

<x-card
    class="plans"
    x-data="{
        yearlyDuration: false,
        toggleDuration() {
            this.yearlyDuration = ! this.yearlyDuration

            $refs.monthlyTab.setAttribute('aria-selected', !yearlyDuration)
            $refs.yearlyTab.setAttribute('aria-selected', yearlyDuration)
        }
    }"
>
    <template x-teleport="#plans__duration-toggle">
        <div
            class="plans__duration-toggle"
            role="tablist"
            aria-label="{{ __('Select plan duration') }}"
        >
            <button
                x-ref="monthlyTab"
                role="tab"
                aria-selected="true"
                @click="toggleDuration()"
                :class="yearlyDuration ? '' : 'active'"
            >
                {{ __('Monthly') }}
            </button>
            <button
                x-ref="yearlyTab"
                role="tab"
                aria-selected="false"
                @click="toggleDuration()"
                :class="! yearlyDuration ? '' : 'active'"
            >
                {{ __('Yearly') }}
            </button>
        </div>
    </template>

    @foreach ($plans as $plan)
        <div class="plans__card">
            <div class="plans__plan-name">
                <h3>{{ $plan['name'] }}</h3>
            </div>
            <div aria-live="polite">
                <p
                    class="plans__plan-price"
                    x-show="! yearlyDuration"
                    x-cloak
                >
                    <b>${{ $plan['price_per_month'] }}</b>
                    /{{ __('month') }}
                </p>
                <p
                    class="plans__plan-price"
                    x-show="yearlyDuration"
                    x-cloak
                >
                    <b>${{ $plan['price_per_year'] }}</b>
                    /{{ __('year') }}
                </p>
            </div>
            <div class="plans__plan-features">
                <h4>{{ __('Available Features') }}</h4>
                <ul class="plans__features-wrapper">
                    @foreach ($plan['features'] as $feature)
                        <li class="plans__feature">
                            <div class="plans__feature-icon"><x-icons.check /></div>
                            <p class="plans__feature-name">{{ $feature }}</p>
                        </li>
                    @endforeach

                    @foreach ($plan['missing_features'] as $feature)
                        <li class="plans__feature">
                            <div class="plans__feature-icon plans__feature-icon--missing"><x-icons.x-mark /></div>
                            <p class="plans__feature-name">{{ $feature }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <x-button
                class="plans__action-button"
                :name="__('Get Started')"
                :to="lroute('home')"
                color="primary"
            />
        </div>
    @endforeach
</x-card>
