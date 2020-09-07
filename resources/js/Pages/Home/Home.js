import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

function Home(props) {
    return (
        <div className="flex justify-center w-screen h-screen bg-blue-100">
            <div className="container">
                <div className="text-6xl text-gray-800">
                    Welcome to Aprendimos!!!
                </div>

                <p className="text-blue-600 font-bold text-2xl">
                    Do your best ever!
                </p>

                <p className="text-2xl font-semibold mb-3">{props.message}</p>

                <InertiaLink
                    href={route("about")}
                    className="bg-blue-500 px-3 py-1 rounded-lg text-blue-100"
                >
                    About
                </InertiaLink>
            </div>
        </div>
    );
}

export default Home;
