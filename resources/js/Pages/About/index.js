import React from "react";
import Helmet from "react-helmet";
import { InertiaLink } from "@inertiajs/inertia-react";

function About() {
    return (
        <div className="flex justify-center w-screen h-screen bg-blue-100">
            <Helmet title="About" />
            <div className="container">
                <div className="text-6xl text-gray-800">About</div>

                <InertiaLink
                    href={route("home")}
                    className="bg-blue-500 px-3 py-1 rounded-lg text-blue-100"
                >
                    Home
                </InertiaLink>
            </div>
        </div>
    );
}

export default About;
