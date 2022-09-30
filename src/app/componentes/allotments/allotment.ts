export interface Allotment{
    id: number,
    category: {
        id: number,
        name: string
    },

    brand: {
        id: number,
        name: string
    }

    name: string,

    status: {
        id: number,
        name: string
    }

    initialValue: number,
    totalValue: number,
    minimumBid: number,
    startDate: Date,
    endDate: Date,
    location: {
        id: number,
        cityName: string,
        uf: {
            id: number,
            name: string
        }

        countryName: string,
        createdAt: Date,
        updateAt: Date
    }

    view: number

}