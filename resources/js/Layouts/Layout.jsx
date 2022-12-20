export default function Layout({ children, title, showMessage }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <h2 className="text-3xl font-medium mb-2">{title}</h2>
            {showMessage && (
                <div
                    style={{
                        border: "1px solid #9ece9e",
                        borderRadius: "5px",
                        width: "60%",
                        padding: "6px 0",
                        textAlign: "center",
                        backgroundColor: "#cae5ca",
                        fontWeight: "bold",
                        marginBottom: "1rem",
                    }}
                >
                    Data is saved
                </div>
            )}
            <div
                className="w-full px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
                style={{ width: "60%" }}
            >
                {children}
            </div>
        </div>
    );
}
