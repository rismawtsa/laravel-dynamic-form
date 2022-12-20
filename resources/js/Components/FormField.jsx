const FIELD_MAP = {
    text: ({ field, data, onChange }) => {
        return (
            <input
                type="text"
                id={field.name}
                name={field.name}
                value={data[field.name]}
                className="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required={field.is_required}
                onChange={(e) => onChange(e)}
            />
        );
    },
    number: ({ field, data, onChange }) => {
        return (
            <input
                type="number"
                id={field.name}
                name={field.name}
                value={data[field.name]}
                className="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required={field.is_required}
                placeholder={field.placeholder}
                onChange={(e) => onChange(e)}
            />
        );
    },
    textarea: ({ field, data, onChange }) => {
        return (
            <textarea
                id={field.name}
                name={field.name}
                value={data[field.name]}
                className="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                required={field.is_required}
                placeholder={field.placeholder}
                onChange={(e) => onChange(e)}
            >
                {data[field.name]}
            </textarea>
        );
    },
    file: ({ field, onChange }) => {
        return (
            <input
                type="file"
                id={field.name}
                name={field.name}
                required={field.is_required}
                onChange={(e) => onChange(e)}
            />
        );
    },
    checkbox: ({ field, data, onChange }) => {
        return (
            <div>
                {field.options.map((opt, id) => {
                    return (
                        <div key={id}>
                            <input
                                type="checkbox"
                                id={opt.id}
                                name={field.name}
                                value={data[field.name]}
                                className="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                onChange={(e) => onChange(e)}
                            />
                            &nbsp;&nbsp;&nbsp;
                            {opt.name}
                        </div>
                    );
                })}
            </div>
        );
    },
    combobox: ({ field, data, onChange }) => {
        return (
            <select
                className="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                value={data[field.name]}
                name={field.name}
                onChange={(e) => onChange(e)}
            >
                <option>Select City</option>
                {field.options.map((opt, id) => {
                    return (
                        <option key={id} value={opt.i}>
                            {opt.name}
                        </option>
                    );
                })}
            </select>
        );
    },
    radio: ({ field, data, onChange }) => {
        return (
            <div>
                {field.options.map((opt, id) => {
                    return (
                        <div key={id}>
                            <input
                                type="radio"
                                id={opt.id}
                                name={field.name}
                                value={data[field.name]}
                                className="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                onChange={(e) => onChange(e)}
                            />
                            &nbsp;&nbsp;&nbsp;
                            {opt.name}
                        </div>
                    );
                })}
            </div>
        );
    },
};

export default function FormField(props) {
    const Component = FIELD_MAP[props.field.type];
    return Component && <Component {...props} />;
}
