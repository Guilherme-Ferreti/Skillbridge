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
    x-data="{ yearlyDuration: false }"
>
    <template x-teleport="#plan-duration-toggle">
        <div class="plan-duration-toggle">
            <a
                role="tab"
                @click="yearlyDuration=false"
                :class="yearlyDuration ? '' : 'active'"
            >
                Monthly
            </a>
            <a
                role="tab"
                @click="yearlyDuration=true"
                :class="! yearlyDuration ? '' : 'active'"
            >
                Yearly
            </a>
        </div>
    </template>

    @foreach ($plans as $plan)
        <div class="plans__card">
            <div class="plans__plan-name">
                <h3>{{ $plan['name'] }}</h3>
            </div>
            <p
                class="plans__plan-price"
                x-show="! yearlyDuration"
            >
                <b>${{ $plan['price_per_month'] }}</b>
                /month
            </p>
            <p
                class="plans__plan-price"
                x-show="yearlyDuration"
            >
                <b>${{ $plan['price_per_year'] }}</b>
                /year
            </p>
            <div class="plans__plan-features">
                <h4>Available Features</h4>
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
                name="Get Started"
                :to="route('home')"
                color="primary"
            />
        </div>
    @endforeach
</x-card>
