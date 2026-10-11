@extends('layouts.app')

@section('title', 'VELORA - Contact Us')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you. Get in touch with VELORA.</p>
</section>


<!-- Contact Section -->
<section class="section">

    <div class="container">

        <div class="hero-content">

            <!-- Contact Information -->
            <div class="hero-text">

                <span class="badge">GET IN TOUCH</span>

                <h2>
                    Let's Talk
                </h2>

                <p>
                    Have a question about our products, orders or
                    delivery? Feel free to contact us. Our team is
                    always ready to help.
                </p>


                <div style="margin-top: 30px;">

                    <div style="margin-bottom: 25px;">
                        <h3>📍 Address</h3>
                        <p>
                            Mirpur-2 ,Dhaka, Bangladesh.
                        </p>
                    </div>


                    <div style="margin-bottom: 25px;">
                        <h3>📞 Phone</h3>
                        <p>
                            +880 1719887675
                        </p>
                    </div>


                    <div style="margin-bottom: 25px;">
                        <h3>📧 Email</h3>
                        <p>
                            support@VELORA.com
                        </p>
                    </div>


                    <div>
                        <h3>🕒 Business Hours</h3>
                        <p>
                            Monday – Saturday<br>
                            10:00 AM – 8:00 PM <br>
                            Sunday: Closed
                        </p>
                    </div>

                </div>

            </div>


            <!-- Contact Form -->
            <div style="
                background: #fff;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 5px 25px rgba(0,0,0,0.08);
                width: 100%;
                max-width: 550px;
            ">

                <h2 style="margin-bottom: 25px;">
                    Send Us a Message
                </h2>

                <form action="#" method="POST">

                    @csrf

                    <!-- Name -->
                    <div style="margin-bottom: 18px;">

                        <label>
                            Your Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Enter your name"
                            required
                            style="
                                width: 100%;
                                padding: 13px;
                                margin-top: 7px;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                font-size: 15px;
                            "
                        >

                    </div>


                    <!-- Email -->
                    <div style="margin-bottom: 18px;">

                        <label>
                            Email Address
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                            style="
                                width: 100%;
                                padding: 13px;
                                margin-top: 7px;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                font-size: 15px;
                            "
                        >

                    </div>


                    <!-- Phone -->
                    <div style="margin-bottom: 18px;">

                        <label>
                            Phone Number
                        </label>

                        <input
                            type="text"
                            name="phone"
                            placeholder="Enter your phone number"
                            style="
                                width: 100%;
                                padding: 13px;
                                margin-top: 7px;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                font-size: 15px;
                            "
                        >

                    </div>


                    <!-- Subject -->
                    <div style="margin-bottom: 18px;">

                        <label>
                            Subject
                        </label>

                        <input
                            type="text"
                            name="subject"
                            placeholder="What is this about?"
                            required
                            style="
                                width: 100%;
                                padding: 13px;
                                margin-top: 7px;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                font-size: 15px;
                            "
                        >

                    </div>


                    <!-- Message -->
                    <div style="margin-bottom: 20px;">

                        <label>
                            Message
                        </label>

                        <textarea
                            name="message"
                            rows="5"
                            placeholder="Write your message..."
                            required
                            style="
                                width: 100%;
                                padding: 13px;
                                margin-top: 7px;
                                border: 1px solid #ddd;
                                border-radius: 8px;
                                font-size: 15px;
                                resize: vertical;
                            "
                        ></textarea>

                    </div>


                    <!-- Submit -->
                    <button
                        type="submit"
                        class="btn"
                        style="border: none; cursor: pointer;"
                    >
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<!-- FAQ / Help -->
<section class="section">

    <div class="container">

        <h2 class="section-title">
            Need Help?
        </h2>

        <div class="categories">

            <div class="category-card">

                <div class="category-icon">
                    📦
                </div>

                <h3>Order Support</h3>

                <p>
                    Need help with your order?
                    Contact our support team.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    🚚
                </div>

                <h3>Delivery Information</h3>

                <p>
                    Ask us about delivery times,
                    locations and shipping.
                </p>

            </div>


            <div class="category-card">

                <div class="category-icon">
                    🔄
                </div>

                <h3>Return & Exchange</h3>

                <p>
                    Contact us if you need help
                    with a return or exchange.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="section">

    <div class="container">

        <div style="
            background: #111;
            color: white;
            padding: 55px 30px;
            border-radius: 15px;
            text-align: center;
        ">

            <h2 style="
                font-size: 34px;
                margin-bottom: 15px;
            ">
                Ready to Shop?
            </h2>

            <p style="
                margin-bottom: 25px;
                font-size: 17px;
            ">
                Explore our latest shoes and clothing collection.
            </p>

            <a href="{{ route('shoes') }}" class="btn">
                Shop Now
            </a>

        </div>

    </div>

</section>

@endsection