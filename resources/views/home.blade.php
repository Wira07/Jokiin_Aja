<!-- resources/views/home.blade.php -->
<x-layout>
    <x-slot:title>Home</x-slot:title>

    <style>
        /* Removing default margin and padding */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
        }

        /* Styling for the service cards */
        .service-card {
            background-color: #f9f9f9;
            /* Light background color for the cards */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow for depth */
            padding: 16px;
            /* Padding inside the cards */
            text-align: center;
            /* Center-align text and images */
            transition: transform 0.3s, box-shadow 0.3s;
            /* Smooth hover effect */
            display: flex;
            /* Flexbox to center content */
            flex-direction: column;
            /* Column layout for the content */
            justify-content: center;
            /* Center content vertically */
            align-items: center;
            /* Center content horizontally */
            height: 100%;
            /* Make sure card takes full height of the grid cell */
        }

        .service-card:hover {
            transform: translateY(-5px);
            /* Lift the card slightly on hover */
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            /* Enhance shadow on hover */
        }

        .service-card img {
            width: 4rem;
            /* Equivalent to 16px in a rem-based setup */
            height: 4rem;
            object-fit: cover;
            /* Ensures the image covers the area without distortion */
            border-radius: 50%;
            /* Makes the image circular */
            margin-bottom: 12px;
            /* Space between the image and the title */
        }
    </style>

    <div class="w-full h-screen flex flex-col justify-between bg-gradient-to-r from-purple-500 to-indigo-600">
        <!-- Section 1: Welcome Message with Custom Background -->
        <section class="flex flex-col md:flex-row justify-between items-center text-white p-8">
            <div class="md:w-1/2">
                <h1 class="text-5xl md:text-6xl font-extrabold">Think Big. We make IT, <span class="text-yellow-300">possible!</span></h1>
                <p class="mt-4 text-2xl md:text-3xl">We place you at the center of international networks to advance your strategic interests.</p>
                <button class="mt-6 px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-full shadow-lg transition duration-300">Our Team</button>
            </div>
            <div class="md:w-1/2 flex justify-center mt-8 md:mt-0">
                <img src="/path/to/your/image.png" alt="Hero Image" class="rounded-full shadow-xl">
            </div>
        </section>

        <!-- Section 2: Service Cards -->
        <section class="bg-white py-8 px-4 md:px-16 rounded-t-lg shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <!-- Card 1 -->
                <div class="service-card">
                    <img src="https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149052117.jpg?t=st=1725335056~exp=1725338656~hmac=bfe66a8e160b88c681eb9059d729a76ed8ff34d9433c2693bcf4f5461bcee9ce&w=826" alt="UI/UX Design">
                    <h2 class="text-lg font-bold">UI/UX Design Services</h2>
                </div>
                <!-- Card 2 -->
                <div class="service-card">
                    <img src="https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149052117.jpg?t=st=1725335056~exp=1725338656~hmac=bfe66a8e160b88c681eb9059d729a76ed8ff34d9433c2693bcf4f5461bcee9ce&w=826" alt="Business Consultation">
                    <h2 class="text-lg font-bold">Business Consultation</h2>
                </div>
                <!-- Card 3 -->
                <div class="service-card">
                    <img src="https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149052117.jpg?t=st=1725335056~exp=1725338656~hmac=bfe66a8e160b88c681eb9059d729a76ed8ff34d9433c2693bcf4f5461bcee9ce&w=826" alt="Website Development">
                    <h2 class="text-lg font-bold">Website Development</h2>
                </div>
                <!-- Card 4 -->
                <div class="service-card">
                    <img src="https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149052117.jpg?t=st=1725335056~exp=1725338656~hmac=bfe66a8e160b88c681eb9059d729a76ed8ff34d9433c2693bcf4f5461bcee9ce&w=826" alt="Support Management">
                    <h2 class="text-lg font-bold">Support Management</h2>
                </div>
                <!-- Card 5 -->
                <div class="service-card">
                    <img src="https://img.freepik.com/free-vector/gradient-ui-ux-background_23-2149052117.jpg?t=st=1725335056~exp=1725338656~hmac=bfe66a8e160b88c681eb9059d729a76ed8ff34d9433c2693bcf4f5461bcee9ce&w=826" alt="Market Research">
                    <h2 class="text-lg font-bold">Market Research</h2>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="text-center text-white py-4">
            <p>Join over <strong>10,000 happy clients!</strong></p>
            <div class="flex justify-center space-x-4 mt-4">
                <img src="path/to/envato-icon.png" alt="Envato" class="h-6">
                <img src="path/to/slack-icon.png" alt="Slack" class="h-6">
                <img src="path/to/figma-icon.png" alt="Figma" class="h-6">
                <img src="path/to/sketch-icon.png" alt="Sketch" class="h-6">
            </div>
        </footer>
    </div>
</x-layout>