import React from "react";
import { Link } from "react-router-dom";
import SideBar from "./common/SideBar";
import TopNavBar from "./common/TopNavBar";
import { BarChart2 } from "lucide-react";

const Layout = ({ children }) => {
    return (
        <div className="flex h-screen bg-gray-100">
            <SideBar />

            <div className="flex flex-col flex-1 overflow-hidden">
                <TopNavBar />

                <main className=" p-3">{children}</main>
            </div>
        </div>
    );
};

export default Layout;
