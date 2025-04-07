import React from "react";
import { Mail, Bell, User } from "lucide-react";

function TopNavBar() {
    return (
        <header className="flex items-center justify-end px-6 py-4 bg-white border-b">
            {/* <div className="flex items-center">
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
    </div> */}

            <div className="flex items-center space-x-4">
                <button className="p-2 text-gray-500 rounded-full hover:bg-gray-100 hover:cursor-pointer">
                    <Bell size={20} />
                </button>
                <button className="p-2 text-gray-500 rounded-full hover:bg-gray-100 hover:cursor-pointer">
                    <Mail size={20} />
                </button>
                <div className="flex items-center space-x-2">
                    <div className="w-8 h-8 rounded-full bg-gray-300 flex items-center justify-center hover:cursor-pointer">
                        <User size={16} />
                    </div>
                    <span className="hidden md:block font-medium">
                        User Name
                    </span>
                </div>
            </div>
        </header>
    );
}

export default TopNavBar;
