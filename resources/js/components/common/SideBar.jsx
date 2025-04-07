import React, { useState } from "react";
import { Link, useLocation } from "react-router-dom";
import {
    ChevronRight,
    ChevronLeft,
    Home,
    BarChart2,
    Mail,
    Settings,
    Users,
} from "lucide-react";

function SideBar() {
    const location = useLocation();
    const currentPath = location.pathname;

    const menuItems = [
        {
            icon: <Home size={20} />,
            name: "Dashboard",
            app_link: "/",
        },
        {
            icon: <BarChart2 size={20} />,
            name: "Analytics",
            app_link: "/about",
        },
    ];

    const [sidebarOpen, setSidebarOpen] = useState(true);

    const toggleSidebar = () => {
        setSidebarOpen(!sidebarOpen);
    };

    // Function to check if a menu item is active based on the current URL
    const isActive = (path) => {
        // Exact match for home route
        if (path === "/" && currentPath === "/") {
            return true;
        }
        // Partial match for other routes (to handle nested routes)
        if (path !== "/" && currentPath.startsWith(path)) {
            return true;
        }
        return false;
    };

    return (
        <div
            className={`bg-gray-800 text-white transition-all duration-300 ${
                sidebarOpen ? "w-64" : "w-20"
            }`}
        >
            {/* Sidebar Header */}
            <div className="flex items-center justify-between h-16 px-4 border-b border-gray-700">
                {sidebarOpen && (
                    <h1 className="text-xl font-semibold">Dashboard</h1>
                )}
                <button
                    onClick={toggleSidebar}
                    className="p-2 rounded-md hover:bg-gray-700"
                >
                    {sidebarOpen ? (
                        <ChevronLeft size={20} />
                    ) : (
                        <ChevronRight size={20} />
                    )}
                </button>
            </div>

            {/* Sidebar Menu */}
            <div className="py-4">
                {menuItems.map((item, index) => (
                    <Link to={item.app_link} key={index}>
                        <div
                            className={`flex items-center px-3 py-3 mb-1 cursor-pointer mx-4 rounded-lg ${
                                isActive(item.app_link)
                                    ? "bg-gray-700"
                                    : "hover:bg-gray-700"
                            }`}
                        >
                            <div className="flex items-center justify-center w-8">
                                {item.icon}
                            </div>
                            {sidebarOpen && (
                                <span className="ml-3">{item.name}</span>
                            )}
                        </div>
                    </Link>
                ))}
            </div>
        </div>
    );
}

export default SideBar;
