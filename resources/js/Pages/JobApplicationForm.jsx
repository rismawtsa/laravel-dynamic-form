import React, { useState } from "react";
import Layout from "@/Layouts/Layout";
import FormField from "@/Components/FormField";
import PrimaryButton from "@/Components/PrimaryButton";
import { Head, useForm } from "@inertiajs/inertia-react";

export default function Welcome({ fields, test }) {
    const initialData = fields.reduce((prevVal, curVal) => {
        let value = "";
        if (curVal.type === "checkbox") value = [];
        return { ...prevVal, [curVal.name]: value };
    }, {});

    const {
        post,
        data,
        setData,
        processing,
        errors,
        reset,
        recentlySuccessful,
    } = useForm(initialData);

    const submit = (e) => {
        e.preventDefault();

        post(route("store"), {
            onSuccess: () => reset(),
            preserveState: true,
        });
    };

    const onHandleChange = async (event) => {
        let { value, name, id, checked, type, files } = event.target;
        if (type === "radio") {
            value = id;
        } else if (type === "checkbox") {
            if (checked) {
                value = [...data[name], id];
            } else {
                value = data[name].filter((val) => val !== id);
            }
        } else if (type === "file") {
            value = files[0];
        }
        setData((values) => ({
            ...values,
            [name]: value,
        }));
    };

    return (
        <Layout title="Job Application Form" showMessage={recentlySuccessful}>
            <Head title="Application Form" />
            <form onSubmit={submit}>
                {fields.map((field) => {
                    return (
                        <div
                            key={field.id}
                            className="md:flex md:items-center mb-3"
                        >
                            <div className="md:w-1/4">
                                <label
                                    htmlFor={field.name}
                                    className="font-medium text-sm text-gray-700"
                                >
                                    {field.label}
                                </label>
                            </div>
                            <div className="md:w-3/4">
                                <FormField
                                    field={field}
                                    data={data}
                                    onChange={onHandleChange}
                                />
                            </div>
                        </div>
                    );
                })}
                <div className="flex items-center justify-end mt-4">
                    <PrimaryButton className="ml-4" processing={processing}>
                        Submit
                    </PrimaryButton>
                </div>
            </form>
        </Layout>
    );
}
