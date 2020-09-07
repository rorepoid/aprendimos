import React from "react"
import InertiaLink from "@inertiajs/inertia-react"

const NavBar = () => {
    return <nav className="text-green-600 text-white font-bold">
        <InertiaLink href="{route('home')}">rorepoid</InertiaLink>
    </nav>
};

export default NavBar;
