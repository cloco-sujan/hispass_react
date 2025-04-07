import React, { useState } from "react";
import {
    Menu,
    X,
    ChevronRight,
    ChevronLeft,
    Home,
    Settings,
    Users,
    BarChart2,
    Mail,
    Bell,
    Search,
    User,
} from "lucide-react";

const DashboardTemplate = () => {
    const [sidebarOpen, setSidebarOpen] = useState(true);

    const toggleSidebar = () => {
        setSidebarOpen(!sidebarOpen);
    };

    const menuItems = [
        { icon: <Home size={20} />, name: "Dashboard", active: true },
        { icon: <BarChart2 size={20} />, name: "Analytics" },
        { icon: <Users size={20} />, name: "Customers" },
        { icon: <Mail size={20} />, name: "Messages" },
        { icon: <Settings size={20} />, name: "Settings" },
    ];

    return (
        <div className="flex h-screen bg-gray-100">
            {/* Sidebar */}
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
                        <div
                            key={index}
                            className={`flex items-center px-4 py-3 mb-1 cursor-pointer ${
                                item.active
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
                    ))}
                </div>
            </div>

            {/* Main Content */}
            <div className="flex flex-col flex-1 overflow-hidden">
                {/* Top Navigation Bar */}
                <header className="flex items-center justify-between px-6 py-4 bg-white border-b">
                    <div className="flex items-center">
                        <button
                            className="block md:hidden p-2 mr-2 text-gray-600 rounded-md hover:bg-gray-100"
                            onClick={toggleSidebar}
                        >
                            <Menu size={20} />
                        </button>
                        <div className="relative">
                            <Search
                                className="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                                size={18}
                            />
                            <input
                                type="text"
                                placeholder="Search..."
                                className="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>
                    </div>

                    <div className="flex items-center space-x-4">
                        <button className="p-2 text-gray-500 rounded-full hover:bg-gray-100">
                            <Bell size={20} />
                        </button>
                        <button className="p-2 text-gray-500 rounded-full hover:bg-gray-100">
                            <Mail size={20} />
                        </button>
                        <div className="flex items-center space-x-2">
                            <div className="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <User size={16} />
                            </div>
                            <span className="hidden md:block font-medium">
                                John Doe
                            </span>
                        </div>
                    </div>
                </header>

                {/* Page Content */}
                <main className="flex-1 overflow-y-auto p-6">
                    <div className="mb-6">
                        <h2 className="text-2xl font-semibold text-gray-800">
                            Dashboard Overview
                        </h2>
                        <p className="text-gray-600">Welcome back, John Doe!</p>
                    </div>

                    {/* Dashboard Cards */}
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                        {[
                            {
                                title: "Total Users",
                                value: "3,456",
                                color: "bg-blue-500",
                            },
                            {
                                title: "New Orders",
                                value: "234",
                                color: "bg-green-500",
                            },
                            {
                                title: "Pending Tasks",
                                value: "12",
                                color: "bg-yellow-500",
                            },
                            {
                                title: "Support Tickets",
                                value: "7",
                                color: "bg-red-500",
                            },
                        ].map((card, index) => (
                            <div
                                key={index}
                                className="bg-white rounded-lg shadow p-6 flex items-center"
                            >
                                <div
                                    className={`${card.color} p-3 rounded-full mr-4`}
                                >
                                    <BarChart2
                                        className="text-white"
                                        size={24}
                                    />
                                </div>
                                <div>
                                    <h3 className="text-gray-500 text-sm">
                                        {card.title}
                                    </h3>
                                    <p className="text-2xl font-semibold">
                                        {card.value}
                                    </p>
                                </div>
                            </div>
                        ))}
                    </div>

                    {/* Content Panels */}
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div className="bg-white rounded-lg shadow p-6">
                            <h3 className="text-lg font-semibold mb-4">
                                Recent Activity
                            </h3>
                            <div className="space-y-4">
                                {[1, 2, 3, 4].map((item) => (
                                    <div
                                        key={item}
                                        className="flex items-center pb-4 border-b border-gray-100"
                                    >
                                        <div className="w-10 h-10 rounded-full bg-gray-200 mr-3"></div>
                                        <div className="flex-1">
                                            <p className="font-medium">
                                                User updated their profile
                                            </p>
                                            <p className="text-sm text-gray-500">
                                                2 hours ago
                                            </p>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                        <div className="bg-white rounded-lg shadow p-6">
                            <h3 className="text-lg font-semibold mb-4">
                                Performance Overview
                            </h3>
                            <div className="space-y-4">
                                {[
                                    "Website Traffic",
                                    "User Engagement",
                                    "Conversion Rate",
                                    "Bounce Rate",
                                ].map((item, index) => (
                                    <div key={index} className="mb-4">
                                        <div className="flex justify-between mb-1">
                                            <span>{item}</span>
                                            <span>
                                                {Math.floor(
                                                    Math.random() * 40
                                                ) + 60}
                                                %
                                            </span>
                                        </div>
                                        <div className="w-full bg-gray-200 rounded-full h-2">
                                            <div
                                                className="bg-blue-600 h-2 rounded-full"
                                                style={{
                                                    width: `${
                                                        Math.floor(
                                                            Math.random() * 40
                                                        ) + 60
                                                    }%`,
                                                }}
                                            ></div>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    );
};

export default DashboardTemplate;
