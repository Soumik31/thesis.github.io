// Mock data simulating the daily_data and kalman_data database tables
// This replaces the PHP/MySQL backend for GitHub Pages static hosting

const dailyData = [
  { id: 1, Day: "2024-03-10", Time: "08:00:00", Route: 1, ACC: 42 },
  { id: 2, Day: "2024-03-10", Time: "08:05:00", Route: 1, ACC: 38 },
  { id: 3, Day: "2024-03-10", Time: "08:10:00", Route: 1, ACC: 55 },
  { id: 4, Day: "2024-03-10", Time: "08:15:00", Route: 1, ACC: 61 },
  { id: 5, Day: "2024-03-10", Time: "08:20:00", Route: 1, ACC: 47 },
  { id: 6, Day: "2024-03-10", Time: "08:25:00", Route: 1, ACC: 53 },
  { id: 7, Day: "2024-03-10", Time: "08:30:00", Route: 1, ACC: 70 },
  { id: 8, Day: "2024-03-10", Time: "08:35:00", Route: 1, ACC: 66 },
  { id: 9, Day: "2024-03-10", Time: "08:40:00", Route: 1, ACC: 59 },
  { id: 10, Day: "2024-03-10", Time: "08:45:00", Route: 1, ACC: 48 },
  { id: 11, Day: "2024-03-10", Time: "09:00:00", Route: 2, ACC: 30 },
  { id: 12, Day: "2024-03-10", Time: "09:05:00", Route: 2, ACC: 35 },
  { id: 13, Day: "2024-03-10", Time: "09:10:00", Route: 2, ACC: 28 },
  { id: 14, Day: "2024-03-10", Time: "09:15:00", Route: 2, ACC: 40 },
  { id: 15, Day: "2024-03-10", Time: "09:20:00", Route: 2, ACC: 33 },
  { id: 16, Day: "2024-03-11", Time: "08:00:00", Route: 1, ACC: 45 },
  { id: 17, Day: "2024-03-11", Time: "08:05:00", Route: 1, ACC: 50 },
  { id: 18, Day: "2024-03-11", Time: "08:10:00", Route: 1, ACC: 62 },
  { id: 19, Day: "2024-03-11", Time: "08:15:00", Route: 1, ACC: 58 },
  { id: 20, Day: "2024-03-11", Time: "08:20:00", Route: 1, ACC: 44 }
];

const kalmanData = [
  { id: 1,  Day: "2024-03-10", Time: "08:00:00", Route: 1, KPCC: 43, Trafficflow: 516,  Density: 86,  Avgspacing: 11.6, Headway: 6.98, Error: 1,    Errorper: 2.38 },
  { id: 2,  Day: "2024-03-10", Time: "08:05:00", Route: 1, KPCC: 39, Trafficflow: 468,  Density: 78,  Avgspacing: 12.8, Headway: 7.69, Error: 1,    Errorper: 2.63 },
  { id: 3,  Day: "2024-03-10", Time: "08:10:00", Route: 1, KPCC: 54, Trafficflow: 648,  Density: 108, Avgspacing: 9.26, Headway: 5.56, Error: 1,    Errorper: 1.85 },
  { id: 4,  Day: "2024-03-10", Time: "08:15:00", Route: 1, KPCC: 60, Trafficflow: 720,  Density: 120, Avgspacing: 8.33, Headway: 5.00, Error: 1,    Errorper: 1.67 },
  { id: 5,  Day: "2024-03-10", Time: "08:20:00", Route: 1, KPCC: 48, Trafficflow: 576,  Density: 96,  Avgspacing: 10.4, Headway: 6.25, Error: 1,    Errorper: 2.08 },
  { id: 6,  Day: "2024-03-10", Time: "08:25:00", Route: 1, KPCC: 52, Trafficflow: 624,  Density: 104, Avgspacing: 9.62, Headway: 5.77, Error: 1,    Errorper: 1.92 },
  { id: 7,  Day: "2024-03-10", Time: "08:30:00", Route: 1, KPCC: 69, Trafficflow: 828,  Density: 138, Avgspacing: 7.25, Headway: 4.35, Error: 1,    Errorper: 1.45 },
  { id: 8,  Day: "2024-03-10", Time: "08:35:00", Route: 1, KPCC: 65, Trafficflow: 780,  Density: 130, Avgspacing: 7.69, Headway: 4.62, Error: 1,    Errorper: 1.54 },
  { id: 9,  Day: "2024-03-10", Time: "08:40:00", Route: 1, KPCC: 58, Trafficflow: 696,  Density: 116, Avgspacing: 8.62, Headway: 5.17, Error: 1,    Errorper: 1.72 },
  { id: 10, Day: "2024-03-10", Time: "08:45:00", Route: 1, KPCC: 49, Trafficflow: 588,  Density: 98,  Avgspacing: 10.2, Headway: 6.12, Error: 1,    Errorper: 2.04 },
  { id: 11, Day: "2024-03-10", Time: "09:00:00", Route: 2, KPCC: 31, Trafficflow: 372,  Density: 62,  Avgspacing: 16.1, Headway: 9.68, Error: 1,    Errorper: 3.23 },
  { id: 12, Day: "2024-03-10", Time: "09:05:00", Route: 2, KPCC: 34, Trafficflow: 408,  Density: 68,  Avgspacing: 14.7, Headway: 8.82, Error: 1,    Errorper: 2.94 },
  { id: 13, Day: "2024-03-10", Time: "09:10:00", Route: 2, KPCC: 29, Trafficflow: 348,  Density: 58,  Avgspacing: 17.2, Headway: 10.3, Error: 1,    Errorper: 3.45 },
  { id: 14, Day: "2024-03-10", Time: "09:15:00", Route: 2, KPCC: 41, Trafficflow: 492,  Density: 82,  Avgspacing: 12.2, Headway: 7.32, Error: 1,    Errorper: 2.44 },
  { id: 15, Day: "2024-03-10", Time: "09:20:00", Route: 2, KPCC: 32, Trafficflow: 384,  Density: 64,  Avgspacing: 15.6, Headway: 9.38, Error: 1,    Errorper: 3.13 }
];

const routeMap = [
  { Route: 1, Road: "Square Building to TB gate" },
  { Route: 2, Road: "TB gate to Mohakhali flyover" },
  { Route: 3, Road: "Mohakhali to Banani" }
];
