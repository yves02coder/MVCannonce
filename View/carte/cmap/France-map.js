/*
Plugin Name: France regions HTML 5 map
Plugin URI: http://cmap.comersis.com/
Description: France regions map.
Version: france-free-1.032
Author: S.Marmion
Author URI: http://www.cmap.comersis.com
License: non-comercial
*/

// MAP CONFIG  ///////////////////////////////////////////////////////////////////////

var mapcolor = "#0f8091";			// couleur de fond de carte
var mapcolor_hover = "#ff0026";		// couleur de survol de la souris
var maplines = "#FFFFFF";			// couleur des traits de séparation des régions

//


// MAP LINKS  ///////////////////////////////////////////////////////////////////////
//Url = $url du routeur + cle id = valeur
var paths = {
			R0: {
			title: "Grand-Est",
			url: "region&id=1",
			path: "258,68, 257,67, 256,68, 255,66, 253,65, 252,65, 252,66, 251,67, 249,67, 249,66, 248,63, 246,62, 246,61, 245,60, 243,58, 241,58, 238,56, 237,57, 236,57, 236,58, 235,59, 233,58, 233,57, 231,57, 230,56, 226,56, 225,57, 223,58, 222,55, 221,54, 221,54, 220,54, 220,55, 220,54, 219,54, 220,53, 219,52, 216,51, 215,50, 212,48, 211,49, 210,48, 210,46, 210,45, 208,43, 209,40, 210,39, 210,37, 208,37, 206,39, 206,42, 202,44, 197,44, 196,44, 197,47, 196,49, 197,50, 194,54, 193,54, 193,61, 192,63, 190,62, 185,64, 185,65, 186,69, 184,71, 184,72, 184,73, 185,74, 181,79, 181,80, 180,81, 182,86, 183,87, 181,89, 180,90, 180,94, 182,95, 184,98, 186,102, 187,101, 188,103, 191,109, 198,108, 199,108, 200,107, 203,107, 206,105, 210,106, 210,107, 211,107, 211,109, 213,109, 214,110, 214,112, 213,113, 214,116, 219,117, 220,117, 220,119, 223,118, 223,118, 223,117, 227,115, 228,116, 229,115, 230,111, 231,109, 232,110, 233,108, 233,107, 233,107, 237,104, 241,106, 244,106, 246,108, 249,106, 253,110, 254,109, 254,109, 258,112, 258,117, 259,117, 261,119, 261,119, 262,120, 262,121, 263,122, 265,121, 267,121, 268,120, 267,119, 269,118, 269,117, 270,116, 270,114, 269,114, 269,110, 270,104, 270,103, 269,102, 269,99, 271,96, 271,93, 272,92, 272,90, 273,86, 273,84, 274,82, 275,81, 279,76, 280,71, 274,69, 273,70, 268,69, 268,69, 267,68, 265,67, 265,66, 264,65, 261,68, 258,68"
			},
			R1: {
			title: "Nouvelle Aquitaine",
			url: "region&id=2",
			path: "87,138, 88,141, 90,143, 93,152, 92,156, 94,157, 89,159, 88,158, 84,158, 85,157, 81,158, 82,158, 81,160, 79,163, 80,163, 81,164, 83,168, 82,169, 82,172, 80,173, 80,175, 79,175, 78,176, 79,178, 84,181, 84,183, 87,184, 89,187, 90,192, 89,193, 87,189, 83,185, 82,182, 80,184, 80,185, 77,211, 77,209, 79,207, 81,209, 81,211, 80,211, 79,211, 78,212, 77,213, 76,214, 76,217, 75,223, 71,243, 69,246, 66,250, 65,251, 63,251, 63,253, 66,253, 66,255, 67,255, 68,254, 70,255, 71,255, 72,256, 70,260, 69,261, 70,262, 72,262, 72,260, 74,260, 73,261, 76,262, 77,263, 78,263, 81,265, 84,266, 85,265, 86,266, 86,268, 88,268, 90,270, 91,271, 91,270, 93,271, 95,270, 96,265, 96,264, 98,263, 98,262, 102,257, 102,255, 103,255, 103,251, 101,251, 102,250, 101,246, 97,246, 97,245, 99,239, 99,236, 103,235, 104,236, 105,235, 105,234, 107,234, 108,233, 112,233, 115,232, 119,232, 121,232, 122,229, 124,229, 123,228, 125,225, 124,224, 124,223, 128,222, 127,217, 128,215, 131,212, 134,210, 134,208, 136,207, 137,201, 141,201, 145,204, 147,203, 151,203, 153,202, 152,200, 154,200, 154,198, 155,197, 154,196, 158,191, 158,189, 161,190, 160,183, 161,182, 161,179, 158,176, 163,171, 162,168, 162,166, 160,161, 157,159, 156,157, 153,157, 152,157, 145,156, 144,157, 138,158, 137,159, 136,158, 133,158, 132,158, 132,156, 131,156, 130,153, 128,153, 126,151, 126,148, 122,141, 121,139, 119,138, 119,139, 114,140, 113,139, 112,136, 111,136, 110,134, 108,132, 104,136, 103,134, 98,134, 95,135, 93,137, 87,138"
			},
			R2: {
			title: "Auvergne-Rhône Alpes",
			url: "region&id=3",
			path: "194,159, 194,156, 193,155, 189,153, 186,146, 182,149, 180,147, 179,148, 175,148, 172,145, 170,145, 168,147, 163,148, 162,149, 163,152, 162,153, 158,154, 156,157, 157,159, 160,161, 162,166, 162,168, 163,171, 158,176, 161,179, 161,182, 160,183, 161,190, 158,189, 158,191, 154,196, 155,197, 154,198, 154,200, 152,200, 153,202, 151,203, 151,206, 153,209, 153,212, 154,214, 157,213, 160,214, 162,211, 164,206, 166,204, 169,206, 170,208, 171,209, 171,211, 172,213, 172,213, 175,205, 176,206, 180,203, 182,204, 182,207, 186,207, 186,206, 187,206, 192,210, 193,215, 197,222, 201,225, 204,222, 204,224, 206,223, 207,223, 210,225, 210,223, 213,223, 215,225, 219,223, 221,224, 222,223, 222,226, 227,226, 227,228, 230,229, 232,227, 234,226, 234,224, 229,221, 228,220, 230,217, 232,218, 233,216, 231,215, 233,212, 236,212, 236,210, 236,208, 239,208, 240,206, 246,204, 248,205, 248,202, 246,200, 245,198, 246,196, 250,198, 251,197, 254,196, 255,195, 258,194, 259,195, 260,194, 262,192, 263,192, 265,191, 266,185, 264,185, 262,183, 261,180, 261,178, 260,178, 259,177, 258,177, 257,174, 257,172, 260,172, 261,171, 262,168, 259,165, 258,166, 258,163, 256,162, 256,162, 257,158, 255,156, 255,155, 254,154, 249,155, 247,157, 246,156, 245,157, 244,159, 245,160, 245,161, 243,162, 242,163, 240,163, 239,164, 238,163, 238,162, 239,161, 241,160, 241,159, 242,156, 240,155, 237,159, 234,160, 232,160, 232,159, 230,158, 228,160, 226,160, 226,159, 225,159, 223,155, 220,153, 217,154, 214,153, 211,164, 208,160, 208,161, 206,160, 205,161, 204,160, 203,161, 203,163, 200,165, 199,164, 194,164, 192,163, 192,161, 194,159"
			},
			R3: {
			title: "Normandie",
			url: "region&id=4",
			path: "138,41, 135,43, 131,45, 130,45, 127,46, 122,47, 121,48, 113,52, 111,57, 111,58, 112,59, 116,60, 116,60, 112,61, 110,63, 107,64, 104,65, 101,63, 94,62, 89,61, 87,61, 86,62, 85,61, 85,59, 83,56, 84,53, 84,52, 83,51, 80,50, 78,52, 77,52, 71,50, 70,50, 70,51, 71,52, 72,53, 71,54, 71,55, 71,56, 72,59, 73,61, 74,62, 74,63, 75,66, 77,66, 76,67, 76,70, 76,72, 77,75, 76,78, 76,81, 78,84, 80,83, 79,84, 78,85, 76,85, 75,85, 77,90, 79,90, 82,88, 85,89, 85,89, 89,89, 91,91, 92,90, 94,91, 97,90, 102,89, 102,88, 104,88, 105,91, 106,92, 106,94, 108,94, 114,91, 115,91, 116,96, 120,98, 121,98, 123,100, 124,100, 124,100, 124,96, 128,93, 128,89, 125,87, 125,85, 126,84, 129,83, 132,81, 134,82, 137,81, 137,80, 140,76, 139,73, 140,72, 142,72, 144,67, 144,67, 146,66, 144,62, 145,57, 144,53, 146,50, 144,46, 138,41"
			},
			R4: {
			title: "Bourgogne-Franche-Comté",
			url: "region&id=5",
			path: "233,107, 233,107, 233,108, 232,110, 231,109, 230,111, 229,115, 228,116, 227,115, 223,117, 223,118, 223,118, 220,119, 220,117, 219,117, 214,116, 213,113, 214,112, 214,110, 213,109, 211,109, 211,107, 210,107, 210,106, 206,105, 203,107, 200,107, 199,108, 198,108, 191,109, 188,103, 187,101, 186,102, 184,98, 182,95, 180,94, 172,96, 172,99, 170,101, 173,105, 174,108, 171,111, 172,112, 171,113, 168,115, 170,117, 171,120, 170,121, 169,122, 170,125, 169,128, 170,129, 172,133, 172,136, 173,137, 173,140, 172,145, 175,148, 179,148, 180,147, 182,149, 186,146, 189,153, 193,155, 194,156, 194,159, 192,161, 192,163, 194,164, 199,164, 200,165, 203,163, 203,161, 204,160, 205,161, 206,160, 208,161, 208,160, 211,164, 214,153, 217,154, 220,153, 223,155, 225,159, 226,159, 226,160, 228,160, 230,158, 232,159, 232,160, 234,160, 237,159, 240,155, 241,150, 242,148, 247,143, 247,142, 247,139, 247,138, 248,137, 248,137, 251,136, 252,134, 253,133, 255,131, 257,128, 257,126, 258,125, 259,124, 256,124, 257,122, 258,119, 260,120, 261,119, 259,117, 258,117, 258,112, 254,109, 254,109, 253,110, 249,106, 246,108, 244,106, 241,106, 237,104, 233,107"
			},
			R5: {
			title: "Bretagne",
			url: "region&id=6",
			path: "84,96, 85,95, 85,89, 85,89, 82,87, 79,90, 77,89, 75,84, 71,85, 69,84, 70,82, 69,82, 68,82, 67,83, 66,84, 68,87, 67,88, 67,87, 66,86, 66,84, 64,84, 64,84, 63,84, 62,85, 61,83, 60,84, 61,82, 59,82, 55,84, 54,86, 52,86, 52,87, 51,85, 50,84, 49,81, 45,77, 46,76, 44,77, 43,78, 44,76, 44,75, 43,75, 41,77, 42,76, 41,75, 41,76, 39,75, 38,76, 37,76, 36,75, 35,76, 34,76, 34,80, 32,81, 31,79, 28,79, 28,81, 27,80, 26,81, 26,78, 24,78, 24,79, 22,79, 18,80, 17,79, 15,80, 14,80, 13,81, 14,82, 13,81, 12,82, 13,82, 10,82, 9,82, 8,83, 8,84, 9,85, 8,85, 7,88, 8,89, 10,89, 11,89, 15,88, 16,88, 18,86, 15,89, 15,90, 16,89, 18,90, 17,90, 19,91, 18,92, 19,93, 21,93, 18,93, 17,91, 15,91, 12,91, 12,90, 12,91, 11,92, 12,94, 13,93, 17,94, 18,96, 17,97, 16,98, 15,97, 9,98, 8,98, 11,100, 13,99, 12,100, 13,101, 14,102, 15,105, 14,106, 16,107, 19,107, 19,105, 20,105, 20,104, 21,102, 20,104, 22,106, 23,106, 23,104, 26,107, 27,108, 28,108, 28,106, 28,108, 30,107, 29,108, 29,109, 32,109, 32,108, 33,109, 34,112, 35,111, 36,111, 36,108, 36,109, 37,110, 38,109, 36,111, 38,112, 36,112, 39,113, 40,112, 39,114, 40,115, 40,117, 40,118, 41,119, 40,117, 41,115, 42,116, 44,116, 44,114, 45,115, 46,115, 48,115, 49,116, 49,118, 48,117, 45,117, 47,119, 54,119, 56,119, 54,119, 55,121, 62,119, 62,116, 65,114, 71,114, 72,112, 77,110, 80,112, 81,111, 82,106, 85,105, 84,96, 84,96"
			},
			R6: {
			title: "Centre",
			url: "region&id=7",
			path: "170,101, 170,101, 164,103, 160,102, 161,102, 161,100, 159,98, 159,96, 157,96, 156,97, 155,95, 154,97, 150,97, 149,92, 147,92, 146,91, 145,88, 142,85, 142,80, 140,76, 137,80, 137,81, 134,82, 132,81, 130,83, 127,83, 125,85, 125,86, 128,89, 128,93, 124,96, 125,100, 125,100, 126,102, 125,103, 124,104, 125,105, 126,108, 122,113, 121,114, 120,116, 116,118, 115,118, 115,120, 112,118, 112,120, 111,125, 108,132, 111,134, 111,136, 112,136, 113,139, 114,140, 120,139, 119,138, 122,139, 122,141, 126,148, 126,151, 128,153, 130,153, 131,156, 133,156, 132,158, 133,159, 136,158, 137,159, 139,158, 144,157, 145,156, 152,157, 154,157, 156,157, 158,154, 163,153, 163,152, 163,149, 164,148, 168,147, 171,145, 173,145, 173,140, 174,137, 172,136, 172,133, 171,129, 169,128, 170,125, 169,122, 170,121, 171,120, 170,117, 169,115, 171,113, 172,112, 172,111, 174,108, 174,105, 170,101, 170,101"
			},
			R8: {
			title: "Corse",
			url: "region&id=8",
			path: "287,241, 286,242, 286,251, 282,250, 280,253, 275,255, 274,256, 273,256, 272,258, 272,260, 270,262, 270,264, 271,263, 273,265, 270,267, 271,270, 275,272, 273,273, 272,278, 276,276, 276,279, 275,283, 280,284, 277,285, 277,287, 279,289, 285,291, 286,292, 287,293, 290,285, 289,285, 290,284, 291,282, 291,274, 294,268, 292,254, 289,252, 290,246, 289,241, 287,241, 287,241"
			},
			R11: {
			title: "Ile-de-France",
			url: "region&id=9",
			path: "175,72, 174,71, 173,71, 169,72, 167,71, 166,72, 163,72, 157,69, 156,70, 151,68, 148,69, 145,69, 144,67, 142,72, 140,72, 139,73, 140,76, 142,80, 142,85, 145,88, 146,91, 147,92, 149,92, 150,97, 154,97, 155,95, 156,97, 157,96, 159,96, 159,98, 161,100, 161,102, 160,102, 164,103, 170,101, 170,101, 172,99, 172,95, 180,94, 180,89, 182,89, 183,87, 182,86, 180,81, 181,80, 182,79, 177,76, 175,74, 175,72, 175,72"
			},
			R12: {
			title: "Occitanie",
			url: "region&id=10",
			path: "153,212, 153,209, 151,206, 151,203, 147,203, 145,204, 141,201, 137,201, 136,207, 134,208, 134,210, 131,212, 128,215, 127,217, 128,222, 124,223, 124,224, 125,225, 123,228, 124,229, 122,229, 121,232, 119,232, 115,232, 112,233, 108,233, 107,234, 105,234, 105,235, 104,236, 103,235, 99,236, 99,239, 97,245, 97,246, 101,246, 102,250, 101,251, 103,251, 103,255, 102,255, 102,257, 98,262, 98,263, 96,264, 96,265, 95,270, 96,269, 100,272, 100,273, 102,274, 103,275, 106,274, 108,274, 109,275, 111,275, 112,274, 113,275, 114,274, 119,275, 119,271, 119,270, 129,272, 130,274, 135,274, 136,277, 138,278, 138,277, 140,276, 141,277, 142,277, 143,278, 145,279, 144,279, 144,280, 143,281, 144,282, 148,283, 149,285, 150,286, 153,285, 153,284, 155,284, 156,283, 160,285, 162,286, 163,286, 164,286, 165,286, 166,284, 167,284, 169,284, 172,282, 176,283, 177,283, 177,281, 175,280, 174,267, 175,265, 177,260, 179,259, 182,256, 185,256, 187,253, 186,255, 189,253, 192,250, 194,249, 197,247, 198,247, 199,249, 200,250, 201,250, 203,248, 206,247, 206,245, 208,243, 210,243, 210,238, 215,233, 212,230, 211,227, 210,225, 207,223, 206,223, 204,224, 204,222, 201,225, 197,222, 193,215, 192,210, 187,206, 186,206, 186,207, 182,207, 182,204, 180,203, 176,206, 175,205, 172,213, 172,213, 171,211, 171,209, 170,208, 169,206, 166,204, 164,206, 162,211, 160,214, 157,213, 154,214, 153,212"
			},
			R16: {
			title: "Hauts-de-France",
			url: "region&id=11",
			path: "174,18, 170,19, 170,20, 169,20, 167,20, 166,17, 164,17, 163,14, 163,14, 164,13, 163,11, 162,8, 160,9, 158,9, 154,10, 153,11, 152,11, 146,13, 143,16, 143,18, 142,21, 142,24, 143,26, 143,26, 142,31, 144,32, 144,32, 143,31, 142,31, 142,34, 144,37, 143,37, 142,36, 141,37, 139,40, 138,41, 144,46, 146,50, 144,53, 145,57, 144,62, 146,66, 144,67, 145,69, 148,69, 151,69, 156,70, 157,69, 163,72, 166,73, 167,72, 168,72, 173,71, 174,71, 175,72, 175,74, 177,76, 181,79, 181,79, 185,74, 184,73, 184,72, 184,71, 186,69, 185,65, 185,64, 190,62, 192,63, 193,61, 193,54, 194,54, 197,50, 196,49, 197,47, 196,44, 195,43, 195,42, 196,40, 196,38, 194,38, 195,36, 196,34, 195,34, 192,31, 190,32, 189,31, 186,32, 186,33, 185,32, 185,31, 185,30, 184,27, 183,27, 181,27, 182,26, 180,26, 179,27, 178,27, 177,25, 176,22, 176,21, 174,18"
			},
			R17: {
			title: "Pays-de-la-Loire",
			url: "region&id=12",
			path: "97,89, 94,91, 93,90, 91,91, 90,89, 85,89, 85,95, 84,96, 85,105, 82,106, 81,111, 80,112, 77,110, 72,112, 71,114, 65,114, 62,116, 62,119, 55,121, 55,121, 55,122, 54,122, 53,124, 53,126, 55,127, 56,126, 58,128, 61,126, 64,126, 61,127, 60,128, 61,129, 60,130, 59,131, 63,133, 64,135, 63,135, 63,137, 61,139, 60,140, 60,141, 65,146, 66,149, 67,152, 71,155, 73,155, 75,157, 76,157, 78,158, 78,159, 78,158, 80,160, 80,158, 82,159, 85,157, 85,159, 88,158, 89,159, 94,157, 93,156, 93,152, 90,143, 88,141, 87,138, 93,137, 95,135, 98,134, 103,134, 104,136, 108,132, 111,125, 112,120, 112,118, 115,120, 115,118, 116,118, 120,116, 121,114, 122,113, 126,108, 125,105, 124,104, 125,103, 126,102, 125,100, 123,100, 121,98, 120,98, 116,96, 115,91, 114,91, 108,94, 107,94, 107,92, 105,91, 104,88, 102,88, 102,89, 97,89, 97,89"
			},
			R20: {
			title: "Provence-Alpes-Cote-d-Azur",
			url: "region&id=13",
			path: "236,210, 236,212, 233,212, 232,215, 233,217, 232,218, 230,217, 228,220, 229,221, 234,224, 234,227, 232,227, 230,229, 228,228, 227,227, 223,226, 222,223, 221,224, 220,223, 215,226, 214,223, 210,223, 211,225, 212,227, 212,230, 215,233, 211,238, 210,244, 208,243, 206,246, 207,247, 204,248, 202,251, 202,251, 209,251, 210,251, 210,252, 210,253, 211,254, 215,254, 216,254, 217,254, 216,252, 217,251, 219,251, 221,254, 226,254, 227,253, 228,254, 228,255, 229,257, 228,258, 233,258, 233,259, 235,258, 236,258, 239,261, 239,262, 240,262, 241,261, 242,262, 242,260, 243,260, 244,261, 245,261, 247,262, 246,263, 247,262, 247,261, 248,260, 249,260, 252,260, 252,259, 254,258, 256,257, 258,257, 259,255, 257,254, 260,251, 260,250, 264,249, 264,247, 264,246, 265,245, 267,245, 268,244, 269,244, 269,243, 270,241, 271,241, 272,240, 273,240, 274,239, 275,239, 277,237, 277,236, 277,235, 277,234, 279,231, 280,230, 280,229, 281,228, 281,227, 280,225, 280,224, 279,225, 273,226, 273,226, 271,226, 269,224, 265,223, 262,219, 263,217, 261,215, 261,213, 262,212, 263,210, 264,209, 265,208, 264,206, 264,204, 263,204, 260,203, 258,202, 258,201, 257,200, 257,199, 256,198, 255,196, 251,197, 250,198, 246,196, 245,198, 246,200, 249,202, 248,205, 247,204, 240,206, 240,208, 237,208, 236,210, 236,210"
			}

}
//Fonction appelée dans accueil.php
function francefree(){
var cmap = '';
//cmap += '<link rel="stylesheet" href="style.css" type="text/css"/>';
cmap += '<script src="jquery-1.11.1.min.js"></script>';
cmap += '<script src="France-map.js"></script>';
cmap += '<div id="legende"></div><map  name="map"><div id="areas"></div> </map>' +
	'<img id="canvasMap" id="image" src="trans.gif" usemap="#map" alt=""/>' +
	'<canvas id="canvas">Mettez à jour votre navigateur Internet !</canvas>';
document.write(""+cmap+"");
}
$(function(){
        var map = $("#map");
        var areas = $("#areas");
        var canvas = $("#canvas")[0]; 
		canvas.width = 300;
        canvas.height = 300;
        var c = canvas.getContext("2d");
        $.fn.render = function(){ 
          this.data.apply(this, arguments);
          render();
        }
        function clear(){    
          c.fillStyle = "#FFFFFF";
          c.fillRect(0, 0, canvas.width, canvas.height);
        }
	arr = [];
    for (var country in paths) {
        var obj = paths[country].path;
		var lnk = paths[country].url;
		var txt = paths[country].title;
        $('<area />', {
          shape : "poly",
          coords : ""+obj+"",
          href :  ""+lnk+"",
          alt : ""+txt+""
        }).data({
          fillStyle: mapcolor,
          strokeStyle : maplines,
          lineWidth : 1.2,
		  alt : ""+txt+""
        }).mouseenter(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor_hover});
         $("div#legende").html(""+this.alt+"");
		 render();
        }).mouseleave(function(){
          $(this).render({strokeStyle: maplines,
                          fillStyle : mapcolor});
		$("div#legende").html("");
        }).click(function(){
          //location.href=href;
		  window.location.href;
        }).appendTo(areas);
        render();
}
        function fillStroke(fillStyle, strokeStyle){
          if (fillStyle) c.fill();
          if (strokeStyle) c.stroke();
        }
        function render(noClear){
          if (!noClear){
            clear();
          }
          areas.children().each(function(i){
            var area = $(this);
            var shape = area.attr("shape");
            var coords = area.attr("coords").split(",");
            var fillStyle = area.data("fillStyle");
            var strokeStyle = area.data("strokeStyle");
            var lineWidth = area.data("lineWidth");
              if (fillStyle){
                c.fillStyle = fillStyle; 
              }
              if (strokeStyle){
                if (lineWidth){
                  c.lineWidth = lineWidth; 
                }
                c.strokeStyle = strokeStyle;   
              }
              c.beginPath();
              var leng = coords.length;
              c.moveTo(coords[0], coords[1]);
              for (var i = 2; i < leng; i+=2){
                c.lineTo(coords[i], coords[i+1]); 
              }
              c.closePath();
              fillStroke(fillStyle, strokeStyle);
            c.lineWidth = 1;
          });
        }
      });