// import del from "del";
// export const reset = () => {
// 	return del(app.path.clean);
// }

import { deleteAsync as del } from "del";

export const reset = () => {
	return del(app.path.clean);
};